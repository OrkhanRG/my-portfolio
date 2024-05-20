<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginShow()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->only('email', 'password');

        $user = User::query()->where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password))
        {
            return back()
                ->withErrors('daxil etdiyiniz email və ya şifrə yanlışdır')
                ->withInput();
        }

        $remember = $request->has('remember');

        Auth::login($user, $remember);

        if (!Auth::check())
        {
            return back()
                ->withErrors('daxil etdiyiniz email və ya şifrə yanlışdır')
                ->withInput();
        }

        return redirect()->route('admin.index');
    }

    public function logout()
    {
        if (!Auth::check())
        {
            return redirect()->back();
        }

        Auth::logout();

        return redirect()->route('front.index');
    }
}
