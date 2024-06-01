<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
        ]);

        $data = $request->only('name', 'title', 'email', 'phone', 'message');

        Contact::query()->create($data);

        alert()->success('Uğurlu!','Mesajınız göndərildi!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::query()->find($id);

        if (!$contact)
        {
            return response()->json([
                'error' => 'Bacarıq silinmədi!'
            ], 404);
        }

        $delete = $contact->delete();

        return  response()->json([
            'success' => 'Bacarıq Silindi!',
            'status' => $delete
        ], 200);
    }
}
