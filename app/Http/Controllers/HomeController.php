<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::where('active', 1)->orderBy('order')->limit(3)->get();
        return view('statics.home', compact('banners'));
    }
}
