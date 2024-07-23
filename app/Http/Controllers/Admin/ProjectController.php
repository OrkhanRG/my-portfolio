<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::query()->orderBy('id', 'asc')->paginate(10);
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->get();
        return view('admin.project.create_edit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {
        $data = $request->only('title', 'category_id', 'client', 'publish_date', 'description', 'short_description', 'location', 'url');
        $data['status'] = $request->has('status');

        if ($request->slug) {
            $slug = Str::slug($request->slug);
            $project = Project::query()->where('slug', $slug)->first();
            if ($project) {
                alert()->error('Diqqət', 'Daxil etdiyin slug hazırda mövcuddur!');
                return back()->withInput();
            }
        } else {
            $slug = Str::slug($data['title']);
            $project = Project::query()->where('slug', $slug)->first();
            if ($project) {
                $slug = Str::slug('title' . '-' . date('YmdHis'));
            }
        }

        $data['slug'] = $slug;

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $path = 'assets/img/projects/main_images/';
            $name = $data['title'];
            $data['main_image'] = fileUpload($file, $path, $name);
        }

        $project = Project::query()->create($data);

        if (!$project) {
            alert()->error('Diqqət', 'Layihə yaradılan zaman xəta baş verdi!');
            return back()->withInput();
        }

        if ($request->hasFile('images')) {
            $image_list = [];
            foreach ($request->file('images') as $key => $image) {
                $path = 'assets/img/projects/images/';
                $name = $data['title'] . '-' . $key;
                $image_list[] = [
                    'project_id' => $project->id,
                    'path' => fileUpload($image, $path, $name),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            if (count($image_list))
            {
                Image::query()->insert($image_list);
            }
        }

        alert()->success('Təbriklər!', 'Layihə yaradıldı!');
        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::query()->where('id', $id)->firstOrFail();

        return view('admin.project.create_edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, string $id)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $request->validate([
            'name' => ['required', 'min:3'],
            'proficiency' => ['sometimes', 'nullable', 'integer', 'regex:' . $regex, 'min:0', 'max:100'],
            'image' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,webp', 'max:2048'],
        ]);

        $project = Project::query()->where('id', $id)->first();

        if (!$project) {
            return redirect()
                ->back()
                ->withErrors('Bacarıq tapılmadı!')
                ->withInput();
        }

        $data = $request->only('name', 'proficiency', 'order');
        $data['image'] = $project->image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filePath = 'assets/img/projects/';
            $extension = '.' . $file->getClientOriginalExtension();
            $name = Str::slug($data['name'] . '-' . date('YmdHis')) . $extension;

            if (!is_null($project->image) && file_exists($project->image)) {
                unlink($project->image);
            }

            $file->move(public_path($filePath), $name);
            $data['image'] = $filePath . $name;
        }

        $data['status'] = $request->has('status');

        $project->update($data);

        return redirect()
            ->back()
            ->withSuccess('Bacarıq güncəlləndi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::query()->find($id);

        if (!$project) {
            return response()->json([
                'error' => 'Bacarıq silinmədi!'
            ], 404);
        }

        $delete = $project->delete();

        return response()->json([
            'success' => 'Bacarıq Silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $project = Project::query()->where('id', $id)->first();

        if (!$project) {
            return response()->json([
                'error' => 'Bacarıq tapılmadı!'
            ], 404);
        }

        $project->update(['status' => !$project->status]);

        return response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $project
        ], 200);
    }
}
