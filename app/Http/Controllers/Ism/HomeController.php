<?php

namespace App\Http\Controllers\Ism;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('backend.layouts.dashboard');
    }
    public function profile(){
        return view('backend.layouts.profile');
    }
}
