<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('front-end.index');
    }
    public function aboutUs()
    {
        return view('front-end.about-us');
    }
    public function contact()
    {
        return view('front-end.contact');
    }
    public function ariTransport()
    {
        return view('front-end.service.air-transport');
    }
}
