<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('front.blogs');
    }

    public function blogDetails()
    {
        return view('front.blog-details');
    }
}
