<?php

namespace App\Http\Middleware;

use App\Models\About;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AboutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $about = About::query()->first();
        $user = User::query()->first();
        View::share([
            'about' => $about,
            'user' => $user
        ]);
        return $next($request);
    }
}
