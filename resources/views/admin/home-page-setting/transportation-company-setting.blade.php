<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Transportation company</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt Transportation company</li>
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
                            <label for="title">Title Transportation company</label>
                            <input type="text" name="title" id="title" value="{{$transport_setting->title_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describe">Describe Transportation company</label>
                            <textarea name="describe" id="describe">{{$transport_setting->describe_vi ?? ''}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="title_service">Title Worldwide Service</label>
                            <input type="text" name="title_service" id="title_service" value="{{$transport_setting->title_service_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describe_service">Describe Worldwide Service</label>
                            <textarea name="describe_service" id="describe_service">{{$transport_setting->describe_service_vi ?? ''}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div>
                            <label for="title_cert">Title Certified & Award Winner</label>
                            <input type="text" name="title_cert" id="title_cert" value="{{$transport_setting->title_cert_vi ?? ''}}">
                        </div>
                        <div>
                            <label for="describe_cert">Describe Certified & Award Winner</label>
                            <textarea name="describe_cert" id="describe_cert">{{$transport_setting->describe_cert_vi ?? ''}}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
