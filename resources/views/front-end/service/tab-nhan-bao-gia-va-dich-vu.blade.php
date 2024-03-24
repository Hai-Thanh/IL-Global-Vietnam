<link rel="stylesheet" href="{{asset('ui/scss/tab-nhan-bao-gia.css')}}">
<div class="all-service">
    <div class="all-service-title">{{ __('trans.All Services') }}
        <div class="border-bottom-service"></div>
    </div>
    <div class="d-flex flex-column">
        @php
            $services = \App\Models\Service::all();
        @endphp
        @if($services->isEmpty())
            <a href="{{route('service.air.transport')}}">
                <div class="tab-service d-flex justify-content-between align-items-center p-3">
                    <div>{{ __('trans.Air Transport') }}</div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('service.sea.transport')}}">
                <div class="tab-service d-flex justify-content-between align-items-center p-3">
                    <div>{{ __('trans.Sea transport') }}</div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('service.road.transport')}}">
                <div class="tab-service d-flex justify-content-between align-items-center p-3">
                    <div>{{ __('trans.Road transport') }}</div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('service.rail.transport')}}">
                <div class="tab-service d-flex justify-content-between align-items-center p-3">
                    <div>{{ __('trans.Rail transport') }}</div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('service.express.delivery')}}">
                <div class="tab-service d-flex justify-content-between align-items-center p-3">
                    <div>{{ __('trans.Express delivery') }}</div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
            <a href="{{route('customs.services')}}">
                <div class="tab-service d-flex justify-content-between align-items-center p-3">
                    <div>{{ __('trans.Customs services') }}</div>
                    <div>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </a>
        @else
            @foreach($services as $service)
                @php
                    $currentUrl = url()->current();
                @endphp
                <a href="{{route('shipping.services.index',$service->id)}}">
                    <div class="{{$currentUrl == route('shipping.services.index',$service->id) ? 'tab-service-active' : 'tab-service'}} d-flex justify-content-between align-items-center p-3">
                        <div>
                            @if(locationHelper() == 'kr')
                                {{ $service->type_name_ko ?? '오류'}}
                            @elseif(locationHelper() == 'en')
                                {{ $service->type_name_en ?? 'Error'}}
                            @elseif(locationHelper() == 'cn')
                                {{ $service->type_name_zh_cn ?? '錯誤'}}
                            @else
                                {{ $service->type_name_vi ?? 'Lỗi'}}
                            @endif
                        </div>
                        <div>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
</div>
<div class="all-service mt-3">
    <div class="all-service-title">{{ __('trans.Get a Quote') }}
        <div class="border-bottom-service"></div>
    </div>
    <div class="d-flex flex-column mt-4">
        <form action="{{route('booking.form')}}" method="post">
            @csrf
            <div class="">
                <label for="air-name">{{ __('trans.Full Name') }} <span>*</span></label>
                <input type="text" name="air-name" id="air-name">
            </div>
            <div>
                <label for="air-mail">{{ __('trans.Enter Email') }} <span>*</span></label>
                <input type="email" name="air-mail" id="air-mail">
            </div>
            <div>
                <label for="air-phone">{{ __('trans.Phone Number') }} <span>*</span></label>
                <input type="number" name="air-phone" id="air-phone">
            </div>

            <div>
                <label for="air-weight">{{ __('trans.Weight') }} <span>*</span></label>
                <input type="text" name="air-weight" id="air-weight">
            </div>
            <div>
                <label for="air-size">{{ __('trans.Size') }} <span>*</span></label>
                <input type="text" name="air-size" id="air-size">
            </div>
            <div>
                <label for="air-destination">{{ __('trans.Destination') }} <span>*</span></label>
                <input type="text" name="air-destination" id="air-destination">
            </div>
            <div>
                <label for="air-departure">{{ __('trans.Departure point') }} <span>*</span></label>
                <input type="text" name="air-departure" id="air-departure">
            </div>
            @php
                $currentUrl = url()->current();
               preg_match('/\d+$/', $currentUrl, $matches);
               $lastNumber = end($matches);
            @endphp
            <input type="hidden" name="shipping_method" id="shipping_method" value="{{$lastNumber}}">
            <div class="d-flex justify-content-start align-items-center mt-3">
                <button class="il-btn-read-more-black" type="submit">
                    <div class="triangle-bottom-right"></div>
                    {{ __('trans.Get a Quote') }}
                </button>
            </div>
        </form>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function () {
        var currentUrl = window.location.href;
        var urls = ["{{route('service.air.transport')}}",
            "{{route('service.sea.transport')}}",
            "{{route('service.road.transport')}}",
            "{{route('service.rail.transport')}}",
            "{{route('service.express.delivery')}}",
            "{{route('customs.services')}}"
        ];

        urls.forEach(function (url) {
            if (window.location.href.indexOf(url) > -1) {
                $('a[href*="' + url + '"] .tab-service').removeClass('tab-service').addClass('tab-service-active');
            }
        });
    });
</script>
<script>
    document.getElementById("air-phone").addEventListener("input", function () {
        // Lấy giá trị của trường số điện thoại
        let phone = this.value;
        // Giới hạn độ dài tối đa là 10 ký tự
        let maxLength = 10;
        if (phone.length > maxLength) {
            // Hiển thị cảnh báo nếu độ dài vượt quá giới hạn
            alert("Phone number must be at most 10 characters long.");
            // Xóa các ký tự vượt quá giới hạn
            this.value = phone.slice(0, maxLength);
        }
    });
</script>
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        var urlValueMap = {--}}
{{--            "{{route('service.air.transport')}}": "air_transport",--}}
{{--            "{{route('service.sea.transport')}}": "sea_transport",--}}
{{--            "{{route('service.road.transport')}}": "road_transport",--}}
{{--            "{{route('service.rail.transport')}}": "rail_transport",--}}
{{--            "{{route('service.express.delivery')}}": "express_delivery",--}}
{{--            "{{route('customs.services')}}": "customs_services"--}}
{{--        };--}}

{{--        // Lặp qua các URL--}}
{{--        for (var url in urlValueMap) {--}}
{{--            if (window.location.href.indexOf(url) > -1) {--}}
{{--                $('#shipping_method').val(urlValueMap[url]);--}}
{{--                break;--}}
{{--            }--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

