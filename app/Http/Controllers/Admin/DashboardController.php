<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function cvUpload(Request $request)
    {
        $about = About::query()->first();
        $cvURL = $about->cv;

        if ($request->hasFile('cv'))
        {
            if (!is_null($about->cv) && file_exists($about->cv))
            {
                unlink($about->cv);
            }
            $filePath = 'assets/resume/';
            $cvURL = fileUpload($request->file('cv'), $filePath);
        }

        $about->update(['cv' => $cvURL]);

        toast('CV-niz uğurla yükləndi!','success');
//        alert()->success('SuccessAlert','CV-niz uğurla yükləndi!');
        return redirect()->back();
    }

    public function cvDownload()
    {
        $about = About::query()->first();
        $filePath = $about->cv;
        if ($filePath == '')
        {
            return back();
        }

        return response()->download($filePath);
    }
}
