@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
    <div class="pagetitle">
        <h1>Tạo Mới Blog</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt Blog</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-create-blog-up')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title_blog">Title center</label>
                            <input type="text" name="title_blog" id="title_blog">
                        </div>
                        <div class="col-md-6">
                            <label for="img_main_blog">Image</label>
                            <input type="file" name="img_main_blog" id="img_main_blog">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_blog">Describe center</label>
                            <textarea class="textarea" name="describe_blog"
                                      id="describe_blog"></textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="title_sub_blog">Title footer</label>
                            <input type="text" name="title_sub_blog" id="title_sub_blog">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="describe_sub_blog">Describe footer</label>
                            <textarea name="describe_sub_blog" id="describe_sub_blog"></textarea>
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
