<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'description' => ['sometimes', 'nullable', 'min:3'],
        ]);

        $data = $request->only('name', 'description');
        $data['status'] = $request->has('status');
        $data['is_featured'] = $request->has('is_featured');

        Service::query()->create($data);

        return redirect()->route('admin.service.index');
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
        $service = Service::query()->where('id', $id)->firstOrFail();

        return view('admin.service.create_edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'description' => ['sometimes', 'nullable', 'min:3'],
        ]);
        $service = Service::query()->where('id', $id)->first();

        if (!$service)
        {
            return redirect()
                ->back()
                ->withErrors('Serivs tapılmadı!')
                ->withInput();
        }

        $data = $request->only('name', 'description');
        $data['status'] = $request->has('status');
        $data['is_featured'] = $request->has('is_featured');

        $service->update($data);

        return redirect()
            ->back()
            ->withSuccess('Servis güncəlləndi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::query()->find($id);

        if (!$service)
        {
            return response()->json([
                'error' => 'Servis silinmədi!'
            ], 404);
        }

        $delete = $service->delete();

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'status' => $delete
        ], 200);
    }

    public function changeStatus(Request $request)
    {
        $id = $request->only('id');
        $service = Service::query()->where('id', $id)->first();

        if (!$service)
        {
            return response()->json([
                'error' => 'Servis tapılmadı!'
            ], 404);
        }

        $service->update(['status' => !$service->status]);

        return  response()->json([
            'success' => 'Status dəyişdirildi!',
            'data' => $service
        ], 200);
    }

    public function changeIsFeatured(Request $request)
    {
        $id = $request->only('id');
        $service = Service::query()->where('id', $id)->first();

        if (!$service)
        {
            return response()->json([
                'error' => 'Servis tapılmadı'
            ], 404);
        }

        $service->update(['is_featured' => !$service->is_featured]);

        return  response()->json([
            'success' => 'Önə çıxarılma statusu dəyişdirildi!',
            'data' => $service
        ], 200);
    }
}
