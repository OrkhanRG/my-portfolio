<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Comment;

class BlogController extends Controller
{
    public function index()
    {
        $keywords = request()->q;
        $category = request()->category;
        $tag = request()->tag;

        $blogs = Blog::query()
            ->with('category')
            ->where('status', 1)
            ->where('publish_date', '<=', date('Y-m-d'))
            ->where('expire_date', '>=', date('Y-m-d'))
            ->where(function ($query) use ($category, $keywords, $tag) {
                if ($category) {
                    $query->whereHas('category', function ($query) use ($category) {
                        $query->where("name", $category);
                    });
                }

                if ($tag) {
                    $query->whereHas('tags', function ($query) use ($tag) {
                        $query->where("name", "LIKE", "%$tag%");
                    })
                        ->orWhereHas('category', function ($query) use ($tag) {
                            $query->where("name", "LIKE", "%$tag%");
                        })
                        ->orWhere(function ($query) use ($tag) {
                            $query->where("title", "LIKE", "%$tag%")
                                ->orWhere("short_description", "LIKE", "%$tag%")
                                ->orWhere("description", "LIKE", "%$tag%");
                        });
                }

                if ($keywords) {
                    $query->whereHas('category', function ($query) use ($keywords) {
                        $query->where("name", "LIKE", "%$keywords%")
                            ->orWhere("description", "LIKE", "%$keywords%");
                    })
                        ->orWhereHas('tags', function ($query) use ($keywords) {
                            $query->where("name", "LIKE", "%$keywords%");
                        })
                        ->orWhere(function ($query) use ($keywords) {
                            $query->where("title", "LIKE", "%$keywords%")
                                ->orWhere("short_description", "LIKE", "%$keywords%")
                                ->orWhere("description", "LIKE", "%$keywords%");
                        });
                }
            })
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

        $categories = BlogCategory::query()
            ->join('blogs', 'blog_categories.id', '=', 'blogs.category_id')
            ->where('blog_categories.status', 1)
            ->where('blogs.status', 1)
            ->groupBy('blog_categories.id', 'blog_categories.name')
            ->select('blog_categories.id', 'blog_categories.name')
            ->get();

        return view('front.blog.blogs', compact('blogs', 'categories', 'tags', 'latest_blog'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::query()
            ->with([
                'comments' => function ($query) {
                    $query->whereNull('parent_id')
                        ->where('is_active', 1)
                        ->where('is_approved', 1)
                        ->orderBy('created_at', 'desc');
                },
                'comments.childComments' => function ($query) {
                    $query->where('is_approved', 1)
                        ->where('is_active', 1)
                        ->orderBy('created_at', 'desc');
                }
            ])
            ->where('slug', $slug)
            ->firstOrFail();

        $next_blog = Blog::query()
            ->where('status', 1)
            ->where(function ($query) use ($blog) {
                $query
                    ->where('publish_date', '<=', date('Y-m-d'))
                    ->where('publish_date', '>=', $blog->publish_date);
            })
            ->where('expire_date', '>=', date('Y-m-d'))
            ->whereNot('id', $blog->id)
            ->first();

        $previous_blog = Blog::query()
            ->where('status', 1)
            ->where(function ($query) use ($blog) {
                $query
                    ->where('publish_date', '<=', date('Y-m-d'))
                    ->where('publish_date', '<=', $blog->publish_date);
            })
            ->where('expire_date', '>=', date('Y-m-d'))
            ->whereNot('id', $blog->id)
            ->first();


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

        $categories = BlogCategory::query()
            ->where('status', 1)
            ->get();


        return view('front.blog.blog-details',
            compact('blog',
                  'latest_blog',
                             'tags',
                             'categories',
                             'next_blog',
                             'previous_blog'));
    }
}
