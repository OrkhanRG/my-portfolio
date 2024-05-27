<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::query()->find(1);
        $services = Service::query()->where('status', 1)->get();
        $featuredServices = Service::query()->where('is_featured', 1)->get();

        return view('front.index', [
            'user' => $user,
            'services' => $services,
            'featuredServices' => $featuredServices,
        ]);
    }
}
