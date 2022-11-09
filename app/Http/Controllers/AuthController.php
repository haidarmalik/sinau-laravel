<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

use function GuzzleHttp\Promise\all;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credential = $request->only(['email', 'password']);
        if (Auth::attempt($credential)) {
            return redirect('/dosen');
        } else {
            return back();
        }
    }
    public function doLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
