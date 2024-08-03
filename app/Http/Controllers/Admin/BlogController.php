<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\BlogCategory;
use App\Models\BlogImage;
use App\Models\Blog;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::query()->with('category', 'creator')->orderBy('id', 'desc')->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::query()->get();
        return view('admin.blog.create_edit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
        $data = $request->only('title', 'category_id', 'publish_date', 'expire_date', 'description', 'short_description');
        $data['status'] = $request->has('status');
        $data['creator_id'] = auth()->user()->id;


        if ($request->slug) {
            $slug = Str::slug($request->slug);
        } else {
            $slug = Str::slug($data['title']);
            $blog = Blog::query()->where('slug', $slug)->first();
            if ($blog) {
                $slug = Str::slug('title' . '-' . date('YmdHis'));
            }
        }

        $data['slug'] = $slug;

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $path = 'assets/img/blogs/main_images/';
            $name = $data['title'];
            $data['main_image'] = fileUpload($file, $path, $name);
        }

        $blog = Blog::query()->create($data);

        if (!$blog) {
            alert()->error('Diqqət', 'Bloq yaradılan zaman xəta baş verdi!');
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
                    'blog_id' => $blog->id,
                    'created_at' => now()
                ];
            }
            BlogTag::query()->insert($tag_list);
        }

        if ($request->hasFile('images')) {
            $image_list = [];
            foreach ($request->file('images') as $key => $image) {
                $path = 'assets/img/blogs/images/';
                $name = $data['title'] . '-' . $key;
                $image_list[] = [
                    'blog_id' => $blog->id,
                    'path' => fileUpload($image, $path, $name),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            if (count($image_list))
            {
                BlogImage::query()->insert($image_list);
            }
        }

        alert()->success('Təbriklər!', 'Bloq yaradıldı!');
        return redirect()->route('admin.blog.index');
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
        $blog = Blog::query()->where('id', $id)->firstOrFail();
        $images = BlogImage::query()->where('blog_id', $id)->pluck('path')->toArray();
        $categories = BlogCategory::query()->get();
        $tags = BlogTag::query()->where('blog_id', $id)->pluck('name')->toArray();
        $tags = implode(', ', $tags);

        return view('admin.blog.create_edit', compact('blog', 'categories', 'images', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogUpdateRequest $request, string $id)
    {
        $data = $request->only('title', 'category_id', 'publish_date', 'expire_date', 'description', 'short_description');
        $data['status'] = $request->has('status');

        $blog = Blog::query()->findOrFail($id);
        $blog_id = $blog->id;

        $image_list = [];
        $data['main_image'] = $blog->main_image;
        $images_query = BlogImage::query()->where('blog_id', $blog->id);
        $images = $images_query->get();

        if (count($images)) {
            foreach ($images as $image) {
                $image_list[] = [
                    'blog_id' => $image->blog_id,
                    'path' => $image->path
                ];
            }
        }

        if ($request->slug) {
            $slug = Str::slug($request->slug);
        } else {
            $slug = Str::slug($data['title']);
            $checkSlug = Blog::query()->where('slug', $slug)->first();
            if ($checkSlug) {
                $slug = Str::slug($data['title'] . '-' . date('YmdHis'));
            }
        }

        $data['slug'] = $slug;

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $path = 'assets/img/blogs/main_images/';
            $name = $data['title'];

            if($data['main_image'] && file_exists($data['main_image'])) {
                unlink($data['main_image']);
            }

            $data['main_image'] = fileUpload($file, $path, $name);
        }

        $update = $blog->update($data);

        BlogTag::query()->where('blog_id', $blog_id)->delete();
        if ($request->tags)
        {
            $tags = str_replace(['{', '}', '[', ']', '"', ':', 'value'], '', $request->tags);
            $tags = explode(',', $tags);
            $tag_list = [];
            foreach ($tags as $tag) {
                $tag_list[] = [
                    'name' => $tag,
                    'blog_id' => $blog->id,
                    'created_at' => now()
                ];
            }
            BlogTag::query()->insert($tag_list);
        }

        if (!$update) {
            alert()->error('Diqqət', 'Bloq güncəlləmə zamanı xəta baş verdi!');
            return back()->withInput();
        }

        if (count($image_list)) {
            foreach ($image_list as $old_image) {
                if (file_exists($old_image['path'])){
                    unlink($old_image['path']);
                }
            }
            $images_query->delete();
        }

        if ($request->hasFile('images')) {

            $image_list = [];
            foreach ($request->file('images') as $key => $image) {
                $path = 'assets/img/blogs/images/';
                $name = $data['title'] . '-' . $key;
                $image_list[] = [
                    'blog_id' => $blog_id,
                    'path' => fileUpload($image, $path, $name),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            if (count($image_list))
            {
                BlogImage::query()->insert($image_list);
            }
        }

        alert()->success('Təbriklər!', 'Bloq güncəlləndi!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::query()->find($id);

        if (!$blog) {
            return response()->json([
                'error' => 'Bloq silinmədi!'
            ], 404);
        }

        BlogTag::query()->where('blog_id', $blog->id)->delete();

        if ($blog->main_image && file_exists($blog->main_image)) {
            unlink($blog->main_image);
        }

        $images_query = BlogImage::query()->where('blog_id', $id);
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

        $delete = $blog->delete();

        return response()->json([
            'success' => 'Bloq Silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $blog = Blog::query()->where('id', $id)->first();

        if (!$blog) {
            return response()->json([
                'error' => 'Bloq tapılmadı!'
            ], 404);
        }

        $blog->update(['status' => !$blog->status]);

        return response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $blog
        ], 200);
    }
}
