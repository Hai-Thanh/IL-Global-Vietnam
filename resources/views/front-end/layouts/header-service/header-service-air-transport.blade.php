<link rel="stylesheet" href="{{asset('ui/scss/style-header.css')}}">
<div class="position-relative container">
    <div class="container il-header p-0 position-absolute">
        @include('front-end.layouts.component-header')
    </div>
</div>

    <div class="row-full-width select-background">
        <div class="container d-flex align-items-center justify-content-center position-relative h-100">
            <div class="content-about"></div>
            <div id="trapezoid" class="container">

            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        // Mảng chứa các URL cần kiểm tra
        var urls = [
            "{{route('service.air.transport')}}",
            "{{route('service.sea.transport')}}",
            "{{route('service.road.transport')}}",
            "{{route('service.rail.transport')}}",
            "{{route('service.express.delivery')}}",
            "{{route('customs.services')}}"
        ];

        // Đối ứng với mỗi URL, bạn có thể sử dụng một biến chứa HTML tương ứng
        var servicesHTML = {
            "{{route('service.air.transport')}}": `<div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.Service') }} / {{ __('trans.Air Transport') }} </div>`,
            "{{route('service.sea.transport')}}": `<div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.Service') }} / {{ __('trans.Sea transport') }} </div>`,
            "{{route('service.road.transport')}}": `<div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.Service') }} / {{ __('trans.Road transport') }} </div>`,
            "{{route('service.rail.transport')}}": `<div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.Service') }} / {{ __('trans.Rail transport') }} </div>`,
            "{{route('service.express.delivery')}}": `<div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.Service') }} / {{ __('trans.Express delivery') }} </div>`,
            "{{route('customs.services')}}": `<div class="address-about-us"><a href="{{route('home')}}">IL Logistics </a>/ {{ __('trans.Service') }} / {{ __('trans.Customs services') }} </div>`
        };
        var backgroundHeader = {
            "{{route('service.air.transport')}}": `background-service-air-transport`,
            "{{route('service.sea.transport')}}": `background-service-sea-transport`,
            "{{route('service.road.transport')}}": `background-service-road-transport`,
            "{{route('service.rail.transport')}}": `background-service-rail-transport`,
            "{{route('service.express.delivery')}}": `background-express-delivery`,
            "{{route('customs.services')}}": `background-customs-services`
        };

        var titleHeader = {
            "{{route('service.air.transport')}}": `<div class="content-about-us">{{ __('trans.Air Transport') }}</div>`,
            "{{route('service.sea.transport')}}": `<div class="content-about-us">{{ __('trans.Sea transport') }}</div>`,
            "{{route('service.road.transport')}}": `<div class="content-about-us">{{ __('trans.Road transport') }}</div>`,
            "{{route('service.rail.transport')}}": `<div class="content-about-us">{{ __('trans.Rail transport') }}</div>`,
            "{{route('service.express.delivery')}}": `<div class="content-about-us">{{ __('trans.Express delivery') }}</div>`,
            "{{route('customs.services')}}": `<div class="content-about-us">{{ __('trans.Customs services') }}</div>`
        };

        // Lặp qua từng URL và kiểm tra
        urls.forEach(function(url){
            if(window.location.href.indexOf(url) > -1){
                // Nếu URL hiện tại trùng khớp với một trong các URL trong mảng
                var serviceHTML = servicesHTML[url];
                $('#trapezoid').append(serviceHTML);

                // Trích xuất tên lớp nền từ đối tượng backgroundHeader
                var backgroundClass = backgroundHeader[url];

                // Thêm lớp nền cho phần tử .select-background
                $('.select-background').addClass(backgroundClass);

                var titleClass = titleHeader[url];
                console.log(titleClass,titleHeader);
                // Thêm lớp nền cho phần tử .select-title
                $('.content-about').append(titleClass);
            }
        });
    });


</script>
