<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use App\Models\BookingForm;
use App\Models\HeaderSetting;
use App\Models\OrderForm;
use App\Models\TransportCompanySetting;
use App\Models\WhyChooseUsSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mockery\Exception;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $header_setting = HeaderSetting::first();
        $transport_setting = TransportCompanySetting::first();
        $why_setting = WhyChooseUsSetting::first();

        if ($header_setting) {
            $time_in = Carbon::createFromFormat('H:i:s', $header_setting->time_in)->format('h:i A');
            $time_out = Carbon::createFromFormat('H:i:s', $header_setting->time_out)->format('h:i A');
        } else {
            $time_in = '8 AM';
            $time_out = '5 PM';
        }


        return view('front-end.index',compact('header_setting','time_in','time_out','transport_setting','why_setting'));
    }

    public function BookingForm(Request $request)
    {
        try {
            $bookingForm = new BookingForm();
            $bookingForm->name = $request->input('air-name') ?? '';
            $bookingForm->email = $request->input('air-mail') ?? '';
            $bookingForm->phone = $request->input('air-phone') ?? '';
            $bookingForm->weight = $request->input('air-weight') ?? '';
            $bookingForm->size = $request->input('air-size') ?? '';
            $bookingForm->diem_den = $request->input('air-destination') ?? '';
            $bookingForm->diem_di = $request->input('air-departure') ?? '';
            $bookingForm->shipping_method = $request->input('shipping_method') ?? '';
            $success = $bookingForm->save();
            if ($success) {
                toast('Booking success!', 'success', 'top-left');
                return back();
            }
            toast('Booking fail!', 'error', 'top-left');
            return back();
        } catch (\Exception $exception) {
            return $exception;
        }
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
