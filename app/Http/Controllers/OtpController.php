<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login_otp()
    {
        return view('auth.login_otp');
    }
}
