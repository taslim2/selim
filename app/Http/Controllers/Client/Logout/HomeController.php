<?php

namespace App\Http\Controllers\Client\Logout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user/logout/dashboard');
    }
}
