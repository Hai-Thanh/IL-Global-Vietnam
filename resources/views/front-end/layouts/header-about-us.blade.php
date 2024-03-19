<link rel="stylesheet" href="{{asset('ui/scss/style-header.css')}}">
<div class="position-relative container">
    <div class="container il-header p-0 position-absolute">
        @include('front-end.layouts.component-header')
    </div>
</div>
<div class="row-full-width background-about-us">
    <div class="container d-flex align-items-center justify-content-center position-relative h-100">
        <div class="content-about-us">{{ __('trans.About us') }}</div>
        <div id="trapezoid" class="container">
            <div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.About us') }}</div>
        </div>
    </div>
</div>



