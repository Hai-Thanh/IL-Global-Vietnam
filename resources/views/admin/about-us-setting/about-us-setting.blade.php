@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Cài Đặt About Us') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Cài Đặt About Us') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-about-us-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title_about">{{ __('trans.About us') }}</label>
                            <input type="text" name="title_about" id="title_about" value="{{$aboutUs->title_about_vi ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="img_about">{{ __('trans.Image') }}</label>
                            <input type="file" name="img_about" id="img_about">
                            <img style="width: 570px;height: 368px;object-fit: cover;border-radius: 8px;" src="{{$aboutUs->img_about ?? ''}}" alt="{{$aboutUs->img_about ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_about">{{ __('trans.Describe') }}</label>
                            <textarea class="textarea" name="describe_about" id="describe_about">{{$aboutUs->describe_about_vi ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name_us">{{ __('trans.Tên Công Ty') }}</label>
                            <input type="text" name="name_us" id="name_us" value="{{$aboutUs->name_us ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_us">{{ __('trans.Mô Tả Công Ty') }}</label>
                            <textarea name="describe_us" id="describe_us">{{$aboutUs->describe_us_vi ?? ''}}</textarea>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
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
