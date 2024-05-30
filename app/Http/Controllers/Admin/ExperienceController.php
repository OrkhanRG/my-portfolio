<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Http\Requests\ExperienceUpdateRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::query()->orderBy('id', 'desc')->paginate(10);

        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {
        $data = $request->only('company', 'position', 'description', 'start_date', 'end_date');
        $data['status'] = $request->has('status');

        Experience::query()->create($data);

        alert()->success('SuccessAlert', 'Yeni İş - Təcrübə əlavə olundu!');
        return redirect()->route('admin.experience.index');
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
        $experience = Experience::query()->where('id', $id)->first();
        return view('admin.experience.create_edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceUpdateRequest $request, string $id)
    {
        $experience = Experience::query()->where('id', $id)->first();

        if (!$experience)
        {
            alert()->error('Xəta', 'Yeni İş - Təcrübə əlavə olunma zamanı xəta yarandı!');
            return redirect()->back();
        }

        $data = $request->only('company', 'position', 'description', 'start_date', 'end_date');
        $data['status'] = $request->has('status');

        $experience->update($data);

        alert()->success('Uğurlu!', 'İş - Təcrübə güncəlləndi!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::query()->find($id);

        if (!$experience)
        {
            return response()->json([
                'error' => 'İş təcrübəsi silinmədi!'
            ], 404);
        }

        $delete = $experience->delete();

        return  response()->json([
            'success' => 'İş təcrübəsi silindi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $experience = Experience::query()->where('id', $id)->first();

        if (!$experience)
        {
            return response()->json([
                'error' => 'İş təcrübəsi tapılmadı!'
            ], 404);
        }

        $experience->update(['status' => !$experience->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $experience
        ], 200);
    }
}
