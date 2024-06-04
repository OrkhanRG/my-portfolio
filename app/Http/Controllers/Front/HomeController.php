<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::query()->find(1);
        $services = Service::query()->where('status', 1)->get();
        $featuredServices = Service::query()->where('status', 1)->where('is_featured', 1)->get();
        $experiences = Experience::query()->where('status', 1)->get();
        $educations = Education::query()->where('status', 1)->get();
        $skills = Skill::query()->where('status', 1)->orderBy('order', 'asc')->get();

        $totalMonth = 0;
        foreach ($experiences as $experience)
        {
            $start_date = Carbon::make($experience->start_date);
            $end_date = Carbon::make($experience->end_date);
            $totalMonth += $end_date->diffInMonths(Carbon::parse($start_date));;
        }
        $year = floor($totalMonth/12);
        $totalMonth = $totalMonth % 12;
        $totalExperience = [
            'year' => (int)$year,
            'month' => $totalMonth
        ];

        return view('front.index', [
            'user' => $user,
            'services' => $services,
            'featuredServices' => $featuredServices,
            'experiences' => $experiences,
            'totalExperience' => $totalExperience,
            'educations' => $educations,
            'skills' => $skills,
        ]);
    }
}
