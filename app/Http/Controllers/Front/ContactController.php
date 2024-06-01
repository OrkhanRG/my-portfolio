<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        $user = User::query()->first();
        return view('front.contact', compact('user'));
    }
}
