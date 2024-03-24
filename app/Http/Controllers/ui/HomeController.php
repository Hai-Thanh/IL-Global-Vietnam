<?php

namespace App\Http\Controllers\ui;

use App\Enums\BlogStatus;
use App\Enums\ReviewStatus;
use App\Enums\SlideStatus;
use App\Http\Controllers\Controller;
use App\Mail\sendMail;
use App\Mail\sendMailToAdmin;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\BookingForm;
use App\Models\ClientReview;
use App\Models\HeaderSetting;
use App\Models\OrderForm;
use App\Models\Service;
use App\Models\SlideHeader;
use App\Models\TransportCompanySetting;
use App\Models\WhyChooseUsSetting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mockery\Exception;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $header_setting = HeaderSetting::first();
        $transport_setting = TransportCompanySetting::first();
        $why_setting = WhyChooseUsSetting::first();
        $serviceSlides = SlideHeader::where('status', SlideStatus::Active)->get();

        if ($header_setting) {
            $time_in = Carbon::createFromFormat('H:i:s', $header_setting->time_in)->format('h:i A');
            $time_out = Carbon::createFromFormat('H:i:s', $header_setting->time_out)->format('h:i A');
        } else {
            $time_in = '8 AM';
            $time_out = '5 PM';
        }
        $reviews = ClientReview::where('status',ReviewStatus::ACTIVE)->get();
        $listBlogs = Blog::where('status', BlogStatus::ACTIVE)->get();


        return view('front-end.index',compact('header_setting','time_in','time_out','transport_setting','why_setting','reviews','listBlogs','serviceSlides'));
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
                Mail::to($bookingForm->email)->send(new sendMail($bookingForm));
                Mail::to('hairthanhh@gmail.com')->send(new sendMailToAdmin($bookingForm));

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
        $aboutUs = AboutUs::first();
        return view('front-end.about-us',compact('aboutUs'));
    }
    public function contact()
    {
        return view('front-end.contact');
    }
    public function airTransport()
    {
        $service = Service::where('type', \App\Enums\Service::Air)->first();
        return view('front-end.service.air-transport',compact('service'));
    }
    public function seaTransport()
    {
        $service = Service::where('type', \App\Enums\Service::Sea)->first();
        return view('front-end.service.sea-transport',compact('service'));
    }
    public function roadTransport()
    {
        $service = Service::where('type', \App\Enums\Service::Road)->first();
        return view('front-end.service.road-transport',compact('service'));
    }
    public function railTransport()
    {
        $service = Service::where('type', \App\Enums\Service::Rail)->first();
        return view('front-end.service.rail-transport',compact('service'));
    }
    public function expressDelivery()
    {
        $service = Service::where('type', \App\Enums\Service::Express)->first();
        return view('front-end.service.express-delivery',compact('service'));
    }
    public function customsServices()
    {
        $service = Service::where('type', \App\Enums\Service::Customs)->first();
        return view('front-end.service.customs-services',compact('service'));
    }

    public function Blog()
    {
        $listBlogs = Blog::where('status', BlogStatus::ACTIVE)->get();
        return view('front-end.blog',compact('listBlogs'));
    }
    public function DetailBlog($blogId)
    {
        $blog = Blog::find($blogId);
        return view('front-end.detail-blog',compact('blog'));
    }
}
