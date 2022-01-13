<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Session;

class AuthController extends Controller
{
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/')->with('succes', 'Odhlášeno 😊');
    }
}
