<link rel="stylesheet" href="{{asset('ui/scss/style-service.css')}}">
@extends('front-end.layouts.master')
@section('title')
    {{ __('trans.Service') }}
@endsection
@section('content')
    @include('front-end.layouts.header-service.header-shipping-service')
    <div class="container main-service">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div>
                        <img style="object-fit: cover;height: 478px;" class="w-100"
                             src="{{$shipping_service->img_main ?? ''}}" alt="">
                    </div>
                </div>
                <div class="row mt-3">
                    {!! $shipping_service->describe_vi ?? '' !!}
                </div>
                <div class="row">
                    <div class="mo-ta-service h-100">
                        {!! $shipping_service->describe_sub_vi ?? '' !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @include('front-end.service.tab-nhan-bao-gia-va-dich-vu')
            </div>
        </div>
    </div>
@endsection
