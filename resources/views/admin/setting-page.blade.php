@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Setting') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Setting') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-setting-up')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">{{ __('trans.Email') }}</label>
                            <input type="email" name="email" id="email" value="{{$setting->email ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="logo">{{ __('trans.Logo') }}</label>
                            <input type="file" name="logo" id="logo">
                            <img style="width: 570px;height: 368px;object-fit: cover;border-radius: 8px;" src="{{$setting->logo ?? ''}}" alt="{{$setting->logo ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="address">{{ __('trans.Address') }}</label>
                            <textarea class="textarea" name="address" id="address">{{$setting->address ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="link_map">{{ __('trans.link map') }}</label>
                            <input type="text" name="link_map" id="link_map" value="{{$setting->link_map ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">{{ __('trans.phone') }}</label>
                            <input type="number" name="phone" id="phone" value="{{$setting->phone ?? ''}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe">{{ __('trans.mo ta cong ty') }}</label>
                            <textarea name="describe" id="describe">{{$setting->describe_vi ?? ''}}</textarea>
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
