@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>{{ __('trans.Sửa Blog') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Sửa Blog') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-edit-blog-up',$blogEdit->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title_blog">{{ __('trans.Title center') }}</label>
                            <input type="text" name="title_blog" id="title_blog" value="{{$blogEdit->title_blog_vi ?? ''}}">
                        </div>
                        <div class="col-md-6">
                            <label for="img_main_blog">{{ __('trans.Image') }}</label>
                            <input type="file" name="img_main_blog" id="img_main_blog">
                            <img style="width: 100px;height: 100px;object-fit: cover" src="{{$blogEdit->img_main_blog ?? ''}}" alt="{{$blogEdit->img_main_blog}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_blog">{{ __('trans.Describe center') }}</label>
                            <textarea class="textarea" name="describe_blog"
                                      id="describe_blog">{{$blogEdit->describe_blog_vi ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="title_sub_blog">{{ __('trans.Title sub') }}</label>
                            <input type="text" name="title_sub_blog" id="title_sub_blog" value="{{$blogEdit->title_sub_blog_vi ?? ''}}">
                            <input type="hidden" name="status" value="{{\App\Enums\BlogStatus::ACTIVE}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_sub_blog">{{ __('trans.Describe sub') }}</label>
                            <textarea name="describe_sub_blog" id="describe_sub_blog"> {{$blogEdit->describe_sub_blog_vi ?? ''}}</textarea>
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
