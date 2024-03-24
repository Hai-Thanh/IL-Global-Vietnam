@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Tạo mới dịch vụ') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Tạo mới dịch vụ') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-service-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row d-flex">
                        <div class="col-md-6">
                            <label for="type">{{ __('trans.Choose Transport Service') }}</label>
                            <input type="text" name="type" id="type">
{{--                            <select name="type" id="type" class="h-auto">--}}
{{--                                <option value="{{\App\Enums\Service::Air}}">{{\App\Enums\Service::Air}}</option>--}}
{{--                                <option value="{{\App\Enums\Service::Sea}}">{{\App\Enums\Service::Sea}}</option>--}}
{{--                                <option value="{{\App\Enums\Service::Road}}">{{\App\Enums\Service::Road}}</option>--}}
{{--                                <option value="{{\App\Enums\Service::Rail}}">{{\App\Enums\Service::Rail}}</option>--}}
{{--                                <option value="{{\App\Enums\Service::Express}}">{{\App\Enums\Service::Express}}</option>--}}
{{--                                <option value="{{\App\Enums\Service::Customs}}">{{\App\Enums\Service::Customs}}</option>--}}
{{--                            </select>--}}
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">{{ __('trans.Title') }}</label>
                            <input type="text" name="title" id="title">
                        </div>
                        <div class="col-md-6">
                            <label for="img_main">{{ __('trans.Image') }}</label>
                            <input type="file" name="img_main" id="img_main">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe">{{ __('trans.Describe') }}</label>
                            <textarea class="textarea" name="describe"
                                      id="describe"></textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="title2">{{ __('trans.Title more') }}</label>
                            <input type="text" name="title2" id="title2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe2">{{ __('trans.Describe more') }}</label>
                            <textarea name="describe2" id="describe2"></textarea>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            {{ __('trans.Create') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
