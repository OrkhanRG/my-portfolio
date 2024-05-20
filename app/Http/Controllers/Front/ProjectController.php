<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('front.projects');
    }

    public function projectDetails()
    {
        return view('front.project-details');
    }
}
