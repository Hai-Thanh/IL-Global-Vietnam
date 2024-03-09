<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Admin IL Global</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt Header</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-header-setting.update')}}" method="post">
                @csrf
              <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6"></div>

              </div>
            </form>
        </div>
    </section>
@endsection
