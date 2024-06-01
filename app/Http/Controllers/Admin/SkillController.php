<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regex = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/";
        $request->validate([
            'name' => ['required', 'min:3'],
            'proficiency' => ['sometimes', 'nullable', 'integer', 'regex:'.$regex, 'min:0', 'max:100'],
            'image' => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,webp', 'max:2048'],
        ]);

        $data = $request->only('name', 'proficiency');

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filePath = 'assets/img/skills/';
            $extension = '.'.$file->getClientOriginalExtension();
            $name = Str::slug($data['name'].'-'.date('YmdHis')).$extension;
            $file->move(public_path($filePath), $name);
            $data['image'] = $filePath.$name;
        }

        $data['status'] = $request->has('status');

        Skill::query()->create($data);

        return redirect()->route('admin.skill.index');
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
        $skill = Skill::query()->where('id', $id)->firstOrFail();

        return view('admin.skill.create_edit', compact('skill'));
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

        $skill = Skill::query()->where('id', $id)->first();

        if (!$skill)
        {
            return redirect()
                ->back()
                ->withErrors('Bacarıq tapılmadı!')
                ->withInput();
        }

        $data = $request->only('name', 'proficiency');
        $data['image'] = $skill->image;

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filePath = 'assets/img/skills/';
            $extension = '.'.$file->getClientOriginalExtension();
            $name = Str::slug($data['name'].'-'.date('YmdHis')).$extension;

            if (!is_null($skill->image) && file_exists($skill->image))
            {
                unlink($skill->image);
            }

            $file->move(public_path($filePath), $name);
            $data['image'] = $filePath.$name;
        }

        $data['status'] = $request->has('status');

        $skill->update($data);

        return redirect()
            ->back()
            ->withSuccess('Bacarıq güncəlləndi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::query()->find($id);

        if (!$skill)
        {
            return response()->json([
                'error' => 'Bacarıq silinmədi!'
            ], 404);
        }

        $delete = $skill->delete();

        return  response()->json([
            'success' => 'Bacarıq Silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $skill = Skill::query()->where('id', $id)->first();

        if (!$skill)
        {
            return response()->json([
                'error' => 'Bacarıq tapılmadı!'
            ], 404);
        }

        $skill->update(['status' => !$skill->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $skill
        ], 200);
    }
}
