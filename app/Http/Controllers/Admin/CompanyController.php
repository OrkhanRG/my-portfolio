<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'logo' => ['nullable', 'sometimes', 'image', 'mimes:png,jpg,jpeg,webp,gif', 'max:2048']
        ]);

        $data = $request->only('name');
        $data['status'] = $request->has('status');

        if ($request->hasFile('logo')) {
            $filePath = 'assets/img/company/';
            $file = $request->file('logo');
            $data['logo'] = fileUpload($file, $filePath, $data['name']);
        }

        Company::query()->create($data);

        return redirect()->route('admin.company.index');
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
        $company = Company::query()->find($id);
        return view('admin.company.create_edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'logo' => ['nullable', 'sometimes', 'image', 'mimes:png,jpg,jpeg,webp,gif', 'max:2048']
        ]);

        $company = Company::query()->find($id);

        $data = $request->only('name');
        $data['status'] = $request->has('status');
        $data['logo'] = $company->logo;

        if ($request->hasFile('logo')) {

            if (file_exists($data['logo']))
            {
                unlink($data['logo']);
            }

            $filePath = 'assets/img/company/';
            $file = $request->file('logo');
            $data['logo'] = fileUpload($file, $filePath, $data['name']);
        }

        $company->update($data);

        toast('Şirkət məlumatları güncəlləndi!','success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
