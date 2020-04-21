<?php

namespace App\Http\Controllers\Client\Logged;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user/logged/dashboard');
    }
}
