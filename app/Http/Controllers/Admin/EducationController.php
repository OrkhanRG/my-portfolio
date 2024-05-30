<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationStoreRequest;
use App\Http\Requests\EducationUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::query()->orderBy('id', 'desc')->paginate(10);

        return view('admin.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.education.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationStoreRequest $request)
    {
        $data = $request->only('institution', 'field_of_study', 'degree', 'description', 'start_date', 'end_date');
        $data['status'] = $request->has('status');

        Education::query()->create($data);

        alert()->success('Uğurlu!', 'Təhsil əlavə olundu!');
        return redirect()->route('admin.education.index');
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
        $education = Education::query()->where('id', $id)->first();
        return view('admin.education.create_edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationUpdateRequest $request, string $id)
    {
        $education = Education::query()->where('id', $id)->first();

        if (!$education)
        {
            alert()->error('Xəta', 'Təhsil əlavə olunma zamanı xəta yarandı!');
            return redirect()->back();
        }

        $data = $request->only('institution', 'field_of_study', 'degree', 'description', 'start_date', 'end_date');
        $data['status'] = $request->has('status');

        $education->update($data);

        alert()->success('Uğurlu!', 'Təhsil güncəlləndi!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::query()->find($id);

        if (!$education)
        {
            return response()->json([
                'error' => 'Təhsil silinmədi!'
            ], 404);
        }

        $delete = $education->delete();

        return  response()->json([
            'success' => 'Təhsil silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $education = Education::query()->where('id', $id)->first();

        if (!$education)
        {
            return response()->json([
                'error' => 'Təhsil tapılmadı!'
            ], 404);
        }

        $education->update(['status' => !$education->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $education
        ], 200);
    }


}
