<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LoginController extends Controller
{

    public function dashboard()
    {
        if (Auth::check() === true) {
            return view('admin.dashboard');
        }
        return redirect()->route('login');
    }
    public function login()
    {
        return view('login.formLogin');
    }
    public function AutenticarUsuario(Request $request)
    {

        //  dd($request->all());

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin');
        } else {
            return redirect()->back()->withInput()->withErrors(['Email ou senha estão incorretos !']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }
}
