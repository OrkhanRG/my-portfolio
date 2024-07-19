<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $projects = Project::query()->orderBy('order', 'asc')->paginate(10);
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'proficiency' => ['sometimes', 'nullable', 'integer', 'min:0', 'max:100'],
            'image' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,webp', 'max:2048'],
        ]);

        $data = $request->only('name', 'proficiency', 'order');

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filePath = 'assets/img/projects/';
            $extension = '.'.$file->getClientOriginalExtension();
            $name = Str::slug($data['name'].'-'.date('YmdHis')).$extension;
            $file->move(public_path($filePath), $name);
            $data['image'] = $filePath.$name;
        }

        $data['status'] = $request->has('status');

        Project::query()->create($data);

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
    public function update(Request $request, string $id)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $request->validate([
            'name' => ['required', 'min:3'],
            'proficiency' => ['sometimes', 'nullable', 'integer', 'regex:'.$regex, 'min:0', 'max:100'],
            'image' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,webp', 'max:2048'],
        ]);

        $project = Project::query()->where('id', $id)->first();

        if (!$project)
        {
            return redirect()
                ->back()
                ->withErrors('Bacarıq tapılmadı!')
                ->withInput();
        }

        $data = $request->only('name', 'proficiency', 'order');
        $data['image'] = $project->image;

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filePath = 'assets/img/projects/';
            $extension = '.'.$file->getClientOriginalExtension();
            $name = Str::slug($data['name'].'-'.date('YmdHis')).$extension;

            if (!is_null($project->image) && file_exists($project->image))
            {
                unlink($project->image);
            }

            $file->move(public_path($filePath), $name);
            $data['image'] = $filePath.$name;
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

        if (!$project)
        {
            return response()->json([
                'error' => 'Bacarıq silinmədi!'
            ], 404);
        }

        $delete = $project->delete();

        return  response()->json([
            'success' => 'Bacarıq Silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $project = Project::query()->where('id', $id)->first();

        if (!$project)
        {
            return response()->json([
                'error' => 'Bacarıq tapılmadı!'
            ], 404);
        }

        $project->update(['status' => !$project->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $project
        ], 200);
    }
}
