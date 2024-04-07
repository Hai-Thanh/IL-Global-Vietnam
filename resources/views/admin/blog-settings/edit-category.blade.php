@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Sửa Category') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Cài Đặt Category') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-edit-category-up',$categoryEdit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">{{ __('trans.Name') }}</label>
                            <input type="text" name="name" id="name" value="{{ $categoryEdit->name_vi ?? '' }}">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
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
