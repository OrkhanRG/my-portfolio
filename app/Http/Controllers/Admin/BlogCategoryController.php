<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_categories = BlogCategory::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.blog.category.index', compact('blog_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.category.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!empty($request->slug))
        {
            $request->merge(['slug' => Str::slug($request->slug)]);
        }
        else {
            $name = $request->name;
            $request->merge(['slug' => Str::slug($name)]);
        }

        $request->validate([
            'name' => ['required', 'min:3'],
            'slug' => ['sometimes', 'nullable', 'unique:blog_categories,slug'],
            'description' => ['sometimes', 'nullable', 'min:3'],
        ]);

        $data = $request->only('name', 'description', 'slug');
        $data['status'] = $request->has('status');

        BlogCategory::query()->create($data);

        alert()->success('Təbriklər!', 'Kateqoriya yaradıldı!');
        return redirect()->route('admin.blog-category.index');
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
        $blog_category = BlogCategory::query()->where('id', $id)->firstOrFail();

        return view('admin.blog.category.create_edit', compact('blog_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (!empty($request->slug))
        {
            $request->merge(['slug' => Str::slug($request->slug)]);
        }
        else {
            $name = $request->name;
            $request->merge(['slug' => Str::slug($name)]);
        }

        $request->validate([
            'name' => ['required', 'min:3'],
            'slug' => ['sometimes', 'nullable', 'unique:categories,slug,'.$id],
            'description' => ['sometimes', 'nullable', 'min:3'],
        ]);

        $category = BlogCategory::query()->where('id', $id)->first();

        if (!$category)
        {
            alert()->error('Diqqət!', 'Kateqoriya tapılmadı!');
            return redirect()
                ->back()
                ->withErrors('Kateqoriya tapılmadı!')
                ->withInput();
        }

        $data = $request->only('name', 'description', 'slug');
        $data['status'] = $request->has('status');

        $category->update($data);

        alert()->success('Təbriklər!', 'Kateqoriya güncəlləndi!');
        return redirect()
            ->back()
            ->withSuccess('Kateqoriya güncəlləndi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog_category = BlogCategory::query()->find($id);

        if (!$blog_category)
        {
            return response()->json([
                'error' => 'Kateqoriya silinmədi!'
            ], 404);
        }

        $delete = $blog_category->delete();

        return  response()->json([
            'success' => 'Kateqoriya silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $blog_category = BlogCategory::query()->where('id', $id)->first();

        if (!$blog_category)
        {
            return response()->json([
                'error' => 'Kateqoriya tapılmadı!'
            ], 404);
        }

        $blog_category->update(['status' => !$blog_category->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $blog_category
        ], 200);
    }

}
