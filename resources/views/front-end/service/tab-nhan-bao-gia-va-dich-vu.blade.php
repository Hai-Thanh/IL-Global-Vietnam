<link rel="stylesheet" href="{{asset('ui/scss/tab-nhan-bao-gia.css')}}">
<div class="all-service">
    <div class="all-service-title">All Services
        <div class="border-bottom-service"></div>
    </div>
    <div class="d-flex flex-column">
        <a href="{{route('service.ari.transport')}}">
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
        <form action="">
            <div class="">
                <label for="name">Full Name <span>*</span></label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Enter Email <span>*</span></label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="phone">Phone Number <span>*</span></label>
                <input type="number" name="phone" id="phone">
            </div>
            <div>
                <label for="weight">Weight <span>*</span></label>
                <input type="number" name="weight" id="weight">
            </div>
            <div>
                <label for="size">Size <span>*</span></label>
                <input type="text" name="size" id="size">
            </div>
            <div>
                <label for="destination">Destination <span>*</span></label>
                <input type="text" name="destination" id="destination">
            </div>
            <div>
                <label for="departure">departure point <span>*</span></label>
                <input type="text" name="departure" id="departure">
            </div>
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
        var urls = ["{{route('service.ari.transport')}}",
            "{{route('service.sea.transport')}}",
            "{{route('service.road.transport')}}",
            "{{route('service.rail.transport')}}",
            "{{route('service.express.delivery')}}",
            "{{route('customs.services')}}"
        ];

        urls.forEach(function(url){
            if(window.location.href.indexOf(url) > -1){
                console.log(url)
                $('a[href*="' + url + '"] .tab-service').removeClass('tab-service').addClass('tab-service-active');
            }
        });
    });
</script>
