<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use App\Models\ProjectTags;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $search_text = request()->q;

        $projects = Project::query()
            ->with('category', 'tags')
            ->whereHas('category', function ($query) use ($search_text) {
                if ($search_text){
                    $query->where("name", "LIKE", "%$search_text%")
                        ->orWhere("description", "LIKE", "%$search_text%");
                }
            })
            ->orWhereHas('tags', function ($query) use ($search_text) {
                if ($search_text){
                    $query->where("name", "LIKE", "%$search_text%");
                }
            })
            ->orWhere(function ($query) use ($search_text) {
                if ($search_text) {
                    $query->where("title", "LIKE", "%$search_text%")
                        ->orWhere("short_description", "LIKE", "%$search_text%")
                        ->orWhere("description", "LIKE", "%$search_text%");
                }
            })
            ->where('status', 1)
            ->where('publish_date', '<=', date('Y-m-d'))
            ->orderBy('id', 'desc')
            ->paginate(6);

        $categories = Category::query()->where('status', 1)->get();

        return view('front.projects', compact('projects', 'categories'));
    }

    public function projectDetails($slug)
    {
        $project = Project::query()->with('images')->where('slug', $slug)->first();
        $tags = ProjectTags::query()->where('project_id', $project->id)->pluck('name')->toArray();
        $related_projects = Project::query()
            ->with('category')
            ->whereNot('id', $project->id)
            ->where('status', 1)
            ->where('publish_date', '<=', date('Y-m-d'))
            ->whereHas('category', function ($query) use ($project) {
                $query->where('name', $project->category->name);
            })
            ->limit(3)
            ->get();


        return view('front.project-details', compact('project', 'related_projects', 'tags'));
    }
}
