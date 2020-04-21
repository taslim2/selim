<?php

namespace App\Http\Controllers\Mtp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('mtp/home');
    }
}
