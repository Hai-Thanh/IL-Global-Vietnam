@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Sửa Slide') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Sửa Blog') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-edit-slide-up',$slides->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title_slide">{{ __('trans.Title') }}</label>
                            <input type="text" name="title_slide" id="title_slide" value="{{$slides->title_slide_vi ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="image_slide">{{ __('trans.Image') }}</label>
                            <input type="file" name="image_slide" id="image_slide">
                            <img style="width: 100px;height: 100px;object-fit: cover" src="{{$slides->image_slide ?? ''}}" alt="{{$slides->image_slide}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_slide">{{ __('trans.Describe') }}</label>
                            <textarea class="textarea" name="describe_slide"
                                      id="describe_slide">{{$slides->describe_slide_vi ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            @php
                                $services = \App\Models\Service::all();
                            @endphp
                            <label for="id_service">{{ __('trans.Service') }}</label>
                            <select name="id_service" id="id_service">
                                @foreach($services as $service)
                                    <option {{ $service->id == $slides->id_service ? 'selected' : '' }} value="{{$service->id ?? '1'}}">{{$service->type ?? 'Mặc định'}}</option>
                                @endforeach
                            </select>
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
