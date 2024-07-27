<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use App\Models\ProjectTags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::query()->with('category')->orderBy('id', 'desc')->paginate(10);
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

        if ($request->tags)
        {
            $tags = str_replace(['{', '}', '[', ']', '"', ':', 'value'], '', $request->tags);
            $tags = explode(',', $tags);
            $tag_list = [];
            foreach ($tags as $tag) {
                $tag_list[] = [
                    'name' => $tag,
                    'project_id' => $project->id,
                    'created_at' => now()
                ];
            }
            ProjectTags::query()->insert($tag_list);
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
        $images = Image::query()->where('project_id', $id)->pluck('path')->toArray();
        $categories = Category::query()->get();
        $tags = ProjectTags::query()->where('project_id', $id)->pluck('name')->toArray();
        $tags = implode(', ', $tags);

        return view('admin.project.create_edit', compact('project', 'categories', 'images', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, string $id)
    {
        $data = $request->only('title', 'category_id', 'client', 'publish_date', 'description', 'short_description', 'location', 'url');
        $data['status'] = $request->has('status');

        $project = Project::query()->findOrFail($id);
        $project_id = $project->id;

        $image_list = [];
        $data['main_image'] = $project->main_image;
        $images_query = Image::query()->where('project_id', $project->id);
        $images = $images_query->get();

        if (count($images)) {
            foreach ($images as $image) {
                $image_list[] = [
                    'project_id' => $image->project_id,
                    'path' => $image->path
                ];
            }
        }
        if ($request->slug) {
            $slug = Str::slug($request->slug);
        } else {
            $slug = Str::slug($data['title']);
            $project = Project::query()->where('slug', $slug)->first();
            if ($project) {
                $slug = Str::slug($data['title'] . '-' . date('YmdHis'));
            }
        }

        $data['slug'] = $slug;

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $path = 'assets/img/projects/main_images/';
            $name = $data['title'];

            if($data['main_image'] && file_exists($data['main_image'])) {
                unlink($data['main_image']);
            }

            $data['main_image'] = fileUpload($file, $path, $name);
        }

        $update = $project->update($data);

        ProjectTags::query()->where('project_id', $project_id)->delete();
        if ($request->tags)
        {
            $tags = str_replace(['{', '}', '[', ']', '"', ':', 'value'], '', $request->tags);
            $tags = explode(',', $tags);
            $tag_list = [];
            foreach ($tags as $tag) {
                $tag_list[] = [
                    'name' => $tag,
                    'project_id' => $project->id,
                    'created_at' => now()
                ];
            }
            ProjectTags::query()->insert($tag_list);
        }

        if (!$update) {
            alert()->error('Diqqət', 'Layihə güncəlləmə zamanı xəta baş verdi!');
            return back()->withInput();
        }

        if ($request->hasFile('images')) {

            if (count($image_list)) {
                foreach ($image_list as $old_image) {
                    if (file_exists($old_image['path'])){
                        unlink($old_image['path']);
                    }
                }
                $images_query->delete();
            }

            $image_list = [];
            foreach ($request->file('images') as $key => $image) {
                $path = 'assets/img/projects/images/';
                $name = $data['title'] . '-' . $key;
                $image_list[] = [
                    'project_id' => $project_id,
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

        alert()->success('Təbriklər!', 'Layihə güncəlləndi!');
        return redirect()->back();
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

        ProjectTags::query()->where('project_id', $project->id)->delete();

        if ($project->main_image && file_exists($project->main_image)) {
            unlink($project->main_image);
        }

        $images_query = Image::query()->where('project_id', $id);
        $images = $images_query->get();
        $image_list = [];
        if (count($images)) {
            foreach ($images as $image) {
                $image_list[] = [
                    'path' => $image->path
                ];
            }

            foreach ($image_list as $old_image) {
                if (file_exists($old_image['path'])){
                    unlink($old_image['path']);
                }
            }
            $images_query->delete();
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
