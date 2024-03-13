<link rel="stylesheet" href="{{asset('ui/scss/style-about-us.css')}}">
@extends('front-end.layouts.master')
@section('title')
    About Us
@endsection
@section('content')
    @include('front-end.layouts.header-about-us')
    <div class="background-content-about-us d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="title-about-us">
                        @if(locationHelper() == 'kr')
                            {{ $aboutUs->title_about_ko ?? ''}}
                        @elseif(locationHelper() == 'en')
                            {{ $aboutUs->title_about_en ?? ''}}
                        @elseif(locationHelper() == 'cn')
                            {{ $aboutUs->title_about_zh_cn ?? ''}}
                        @else
                            {{ $aboutUs->title_about_vi ?? ''}}
                        @endif
                    </div>
                    <div class="describe-about-us">
                        @if(locationHelper() == 'kr')
                            {!! $aboutUs->describe_about_ko ?? '' !!}
                        @elseif(locationHelper() == 'en')
                            {!! $aboutUs->describe_about_en ?? '' !!}
                        @elseif(locationHelper() == 'cn')
                            {!! $aboutUs->describe_about_zh_cn ?? '' !!}
                        @else
                            {!!  $aboutUs->describe_about_vi ?? '' !!}
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <img style="width: 570px;height: 368px;object-fit: cover;border-radius: 8px;" src="{{$aboutUs->img_about}}" alt="about us">
                </div>
            </div>

        </div>
    </div>
    <div class="container mb-5">
        <div class="text-container">
            <span class="small-text">{{$aboutUs->name_us}}</span>
            <span class="big-text">{{$aboutUs->name_us}}</span>
        </div>
        <div class="mo-ta-about-us">
            @if(locationHelper() == 'kr')
                {!!  $aboutUs->describe_us_ko ?? '' !!}
            @elseif(locationHelper() == 'en')
                {!!  $aboutUs->describe_us_en ?? '' !!}
            @elseif(locationHelper() == 'cn')
                {!! $aboutUs->describe_us_zh_cn ?? '' !!}
            @else
                {!!  $aboutUs->describe_us_vi ?? '' !!}
            @endif
        </div>
    </div>
@endsection
