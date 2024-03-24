<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ShippingServices extends Controller
{
    public function index($id)
    {
        $shipping_service = Service::find($id);
        return view('front-end.shipping-service',compact('shipping_service'));
    }
}
