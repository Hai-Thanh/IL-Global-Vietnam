<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <div class="pagetitle">
        <h1>{{ __('trans.Transportation company') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Cài Đặt Transportation company') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-transportation-company-settings-update')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label for="title">{{ __('trans.Title Transportation company') }}</label>
                            <input type="text" name="title" id="title" value="{{$transport_setting->title_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describe">{{ __('trans.Describe Transportation company') }}</label>
                            <textarea name="describe" id="describe">{{$transport_setting->describe_vi ?? ''}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="title_service">{{ __('trans.Title Worldwide Service') }}</label>
                            <input type="text" name="title_service" id="title_service" value="{{$transport_setting->title_service_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describe_service">{{ __('trans.Describe Worldwide Service') }}</label>
                            <textarea name="describe_service" id="describe_service">{{$transport_setting->describe_service_vi ?? ''}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <label for="title_cert">{{ __('trans.Title Certified & Award Winner') }}</label>
                            <input type="text" name="title_cert" id="title_cert" value="{{$transport_setting->title_cert_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describe_cert">{{ __('trans.Describe Certified & Award Winner') }}</label>
                            <textarea name="describe_cert" id="describe_cert">{{$transport_setting->describe_cert_vi ?? ''}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            {{ __('trans.Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div class="pagetitle border-top">
        <h1 class="mt-5">{{ __('trans.why choose us') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Cài Đặt why choose us') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-why-choose-us')}}" method="post">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label for="titleWhy">{{ __('trans.Title Why choose us') }}</label>
                            <input type="text" name="titleWhy" id="titleWhy" value="{{$why_setting->titleWhy_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describeWhy">{{ __('trans.Describe Why choose us') }}</label>
                            <textarea name="describeWhy" id="describeWhy">{{$why_setting->describeWhy_vi ?? ''}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            {{ __('trans.Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
