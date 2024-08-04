<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()
            ->with('category')
            ->where('status', 1)
            ->where('publish_date', '<=', date('Y-m-d'))
            ->where('expire_date', '>=', date('Y-m-d'))
            ->orderBy('publish_date', 'desc')
            ->paginate(8);

        $latest_blog = Blog::query()
            ->where('status', 1)
            ->where('publish_date', '<=', date('Y-m-d'))
            ->where('expire_date', '>=', date('Y-m-d'))
            ->orderBy('publish_date', 'desc')
            ->limit(3)
            ->get();

        $tags = BlogTag::query()->pluck('name')->toArray();
        $tags = array_map('strtoupper', $tags);
        $tags = array_unique($tags);

        $categories = BlogCategory::query()->where('status', 1)->get();


        return view('front.blog.blogs', compact('blogs', 'categories', 'tags', 'latest_blog'));
    }

    public function blogDetails()
    {
        $latest_blog = Blog::query()
            ->where('status', 1)
            ->where('publish_date', '<=', date('Y-m-d'))
            ->where('expire_date', '>=', date('Y-m-d'))
            ->orderBy('publish_date', 'desc')
            ->limit(3)
            ->get();

        $tags = BlogTag::query()->pluck('name')->toArray();
        $tags = array_map('strtoupper', $tags);
        $tags = array_unique($tags);

        $categories = BlogCategory::query()->where('status', 1)->get();

        return view('front.blog.blog-details', compact('latest_blog', 'tags', 'categories'));
    }
}
