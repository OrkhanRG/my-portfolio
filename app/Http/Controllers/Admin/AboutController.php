<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::query()->first();
        return view('admin.about.index', compact('about'));
    }

    public function generalInfo(AboutUpdateRequest $request)
    {
        $dataUser = $request->only('name', 'surname');
        $dataAbout = $request->except('name', 'surname', 'img_about', 'img_hero');

        $about = About::query()->first();
        $user = User::query()->first();

        if ($request->hasFile('img_hero'))
        {
            if (!is_null($about->img_hero) && file_exists($about->img_hero))
            {
                unlink($about->img_hero);
            }
            $dataAbout['img_hero'] = imgUpload($request->file('img_hero'));
        }

        if ($request->hasFile('img_about'))
        {
            if (!is_null($about->img_about) && file_exists($about->img_about))
            {
                unlink($about->img_about);
            }
            $dataAbout['img_about'] = imgUpload($request->file('img_about'));
        }

        $user->update($dataUser);
        $about->update($dataAbout);

        return back()->with('success', 'Məlumatlar güncəlləndi!');
    }
}
