<?php

namespace App\Http\Controllers\Client\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user/logout/login');
    }

    public function register()
    {

    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password]))
        {
            return redirect('dashboard');
        }
        else
        {
            return redirect('login');
        }
    }

}
