<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use App\Models\HeaderSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $header_setting = HeaderSetting::first();

        $time_in = Carbon::createFromFormat('H:i:s', $header_setting->time_in)->format('h:i A');
        $time_out = Carbon::createFromFormat('H:i:s', $header_setting->time_out)->format('h:i A');


        return view('front-end.index',compact('header_setting','time_in','time_out'));
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
    public function seaTransport()
    {
        return view('front-end.service.sea-transport');
    }
    public function roadTransport()
    {
        return view('front-end.service.road-transport');
    }
    public function railTransport()
    {
        return view('front-end.service.rail-transport');
    }
    public function expressDelivery()
    {
        return view('front-end.service.express-delivery');
    }
    public function customsServices()
    {
        return view('front-end.service.customs-services');
    }
}
