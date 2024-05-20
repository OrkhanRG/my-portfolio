<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('front.contact');
    }
}
