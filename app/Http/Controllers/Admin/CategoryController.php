<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create_edit');
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
            'slug' => ['sometimes', 'nullable', 'unique:categories,slug'],
            'description' => ['sometimes', 'nullable', 'min:3'],
        ]);

        $data = $request->only('name', 'description', 'slug');
        $data['status'] = $request->has('status');

        Category::query()->create($data);

        return redirect()->route('admin.category.index');
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
        $category = Category::query()->where('id', $id)->firstOrFail();

        return view('admin.category.create_edit', compact('category'));
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

        $category = Category::query()->where('id', $id)->first();

        if (!$category)
        {
            return redirect()
                ->back()
                ->withErrors('Kateqoriya tapılmadı!')
                ->withInput();
        }

        $data = $request->only('name', 'description', 'slug');
        $data['status'] = $request->has('status');

        $category->update($data);

        return redirect()
            ->back()
            ->withSuccess('Kateqoriya güncəlləndi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::query()->find($id);

        if (!$category)
        {
            return response()->json([
                'error' => 'Kateqoriya silinmədi!'
            ], 404);
        }

        $delete = $category->delete();

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $category = Category::query()->where('id', $id)->first();

        if (!$category)
        {
            return response()->json([
                'error' => 'Kateqoriya tapılmadı!'
            ], 404);
        }

        $category->update(['status' => !$category->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $category
        ], 200);
    }

}
