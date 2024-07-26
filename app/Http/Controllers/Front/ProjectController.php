<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::query()
            ->with('category')
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

        return view('front.project-details', compact('project', 'related_projects'));
    }
}
