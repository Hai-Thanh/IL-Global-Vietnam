@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>Cài Đặt About Us</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt About Us</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-service-update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row d-flex">
                        <div class="col-md-6 " hidden="">
                            <label for="type">Choose Transport Service</label>
                            <select name="type" id="type" class="h-auto">
                                <option {{$service->type == \App\Enums\Service::Air ? 'selected' : ''}} value="{{\App\Enums\Service::Air}}">{{\App\Enums\Service::Air}}</option>
                                <option {{$service->type == \App\Enums\Service::Sea ? 'selected' : ''}} value="{{\App\Enums\Service::Sea}}">{{\App\Enums\Service::Sea}}</option>
                                <option {{$service->type == \App\Enums\Service::Road ? 'selected' : ''}} value="{{\App\Enums\Service::Road}}">{{\App\Enums\Service::Road}}</option>
                                <option {{$service->type == \App\Enums\Service::Rail ? 'selected' : ''}} value="{{\App\Enums\Service::Rail}}">{{\App\Enums\Service::Rail}}</option>
                                <option {{$service->type == \App\Enums\Service::Express ? 'selected' : ''}} value="{{\App\Enums\Service::Express}}">{{\App\Enums\Service::Express}}</option>
                                <option {{$service->type == \App\Enums\Service::Customs ? 'selected' : ''}} value="{{\App\Enums\Service::Customs}}">{{\App\Enums\Service::Customs}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Title center</label>
                            <input type="text" name="title" id="title" value="{{$service->title_vi}}">
                        </div>
                        <div class="col-md-6">
                            <label for="img_main">Image</label>
                            <input type="file" name="img_main" id="img_main">
                            <img style="width: 100px;height: 100px;object-fit: cover" src="{{$service->img_main}}" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe">Describe center</label>
                            <textarea class="textarea" name="describe"
                                      id="describe">{{$service->title_vi}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="title2">Title footer</label>
                            <input type="text" name="title2" id="title2" value="{{$service->title_vi}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe2">Describe footer</label>
                            <textarea name="describe2" id="describe2">{{$service->title_vi}}</textarea>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
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
