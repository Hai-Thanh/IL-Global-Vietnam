<link rel="stylesheet" href="{{asset('ui/scss/tab-nhan-bao-gia.css')}}">
<div class="all-service">
    <div class="all-service-title">All Services
        <div class="border-bottom-service"></div>
    </div>
    <div class="d-flex flex-column">
        <a href="{{route('service.air.transport')}}">
            <div class="tab-service d-flex justify-content-between align-items-center p-3">
                <div>Air Transport</div>
                <div>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </a>
        <a href="{{route('service.sea.transport')}}">
            <div class="tab-service d-flex justify-content-between align-items-center p-3">
                <div>Sea transport</div>
                <div>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </a>
        <a href="{{route('service.road.transport')}}">
            <div class="tab-service d-flex justify-content-between align-items-center p-3">
                <div>Road transport</div>
                <div>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </a>
        <a href="{{route('service.rail.transport')}}">
            <div class="tab-service d-flex justify-content-between align-items-center p-3">
                <div>Rail transport</div>
                <div>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </a>
        <a href="{{route('service.express.delivery')}}">
            <div class="tab-service d-flex justify-content-between align-items-center p-3">
                <div>Express delivery</div>
                <div>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </a>
        <a href="{{route('customs.services')}}">
            <div class="tab-service d-flex justify-content-between align-items-center p-3">
                <div>Customs services</div>
                <div>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="all-service mt-3">
    <div class="all-service-title">Get a Quote
        <div class="border-bottom-service"></div>
    </div>
    <div class="d-flex flex-column mt-4">
        <form action="{{route('booking.form')}}" method="post">
            @csrf
            <div class="">
                <label for="air-name">Full Name <span>*</span></label>
                <input type="text" name="air-name" id="air-name">
            </div>
            <div>
                <label for="air-mail">Enter Email <span>*</span></label>
                <input type="email" name="air-mail" id="air-mail">
            </div>
            <div>
                <label for="air-phone">Phone Number <span>*</span></label>
                <input type="number" name="air-phone" id="air-phone">
            </div>

            <div>
                <label for="air-weight">Weight <span>*</span></label>
                <input type="text" name="air-weight" id="air-weight">
            </div>
            <div>
                <label for="air-size">Size <span>*</span></label>
                <input type="text" name="air-size" id="air-size">
            </div>
            <div>
                <label for="air-destination">Destination <span>*</span></label>
                <input type="text" name="air-destination" id="air-destination">
            </div>
            <div>
                <label for="air-departure">Departure point <span>*</span></label>
                <input type="text" name="air-departure" id="air-departure">
            </div>
            <input type="hidden" name="shipping_method" id="shipping_method" value="">
            <div class="d-flex justify-content-start align-items-center mt-3">
                <button class="il-btn-read-more-black" type="submit">
                    <div class="triangle-bottom-right"></div>
                    Get a Quote
                </button>
            </div>
        </form>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function () {
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
    $(document).ready(function () {
        var urlValueMap = {
            "{{route('service.air.transport')}}": "air_transport",
            "{{route('service.sea.transport')}}": "sea_transport",
            "{{route('service.road.transport')}}": "road_transport",
            "{{route('service.rail.transport')}}": "rail_transport",
            "{{route('service.express.delivery')}}": "express_delivery",
            "{{route('customs.services')}}": "customs_services"
        };

        // Lặp qua các URL
        for (var url in urlValueMap) {
            if (window.location.href.indexOf(url) > -1) {
                console.log(urlValueMap)
                $('#shipping_method').val(urlValueMap[url]);
                break;
            }
        }
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
