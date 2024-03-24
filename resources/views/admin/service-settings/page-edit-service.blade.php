@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Sửa dịch vụ') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Sửa dịch vụ') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-service-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row d-flex">
                        <div class="col-md-6 " >
                            <label for="type">{{ __('trans.Choose Transport Service') }}</label>
                            <input type="text" name="type" id="type" value="{{$service->type ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="img_background">{{ __('trans.Ảnh nền tiêu đề dịch vụ') }}</label>
                            <input type="file" name="img_background" id="img_background">
                            <img style="width: 100px;height: 100px;object-fit: cover" src="{{$service->img_background ?? ''}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">{{ __('trans.Title') }}</label>
                            <input type="text" name="title" id="title" value="{{$service->title_vi}}">
                        </div>
                        <div class="col-md-6">
                            <label for="img_main">{{ __('trans.Image') }}</label>
                            <input type="file" name="img_main" id="img_main">
                            <img style="width: 100px;height: 100px;object-fit: cover" src="{{$service->img_main}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe">{{ __('trans.Describe') }}</label>
                            <textarea class="textarea" name="describe"
                                      id="describe">{{$service->describe_vi}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="title2">{{ __('trans.Title more') }}</label>
                            <input type="text" name="title2" id="title2" value="{{$service->title_sub_vi}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe2">{{ __('trans.Describe more') }}</label>
                            <textarea name="describe2" id="describe2">{{$service->describe_sub_vi}}</textarea>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            {{ __('trans.Update') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
