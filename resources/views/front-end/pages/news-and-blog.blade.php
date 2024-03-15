<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css">
<link rel="stylesheet" href="{{asset('ui/scss/slider-review-home.css')}}">
<style>
    .uk-card-primary.uk-card-body, .uk-card-primary > :not([class*=uk-card-media]), .uk-card-secondary.uk-card-body, .uk-card-secondary > :not([class*=uk-card-media]), .uk-light, .uk-offcanvas-bar, .uk-overlay-primary, .uk-section-primary:not(.uk-preserve-color), .uk-section-secondary:not(.uk-preserve-color), .uk-tile-primary:not(.uk-preserve-color), .uk-tile-secondary:not(.uk-preserve-color) {
        color: black;
    }

    .news-content-cmt {
        background: white;
        margin: 12px;
        border-radius: 4px;
        width: 93%;
        height: 48px;
    }

    .news-date {
        background: #122E38;
        color: #FFFFFF;
        text-align: center;
        align-items: center;
        display: flex;
        justify-content: center;
        border-radius: 4px 0 0 4px;
    }
    .cmt-group {
        align-items: center;
        gap: 16px;
    }
    .title-news {
        font-size: 24px;
        font-weight: 700;
        line-height: 29px;
        letter-spacing: 0;
        text-align: left;
        font-style: normal;
        -webkit-line-clamp: 2;
        height: 60px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .shot-describe-news {
        font-size: 16px;
        font-weight: 500;
        line-height: 20px;
        letter-spacing: 0;
        text-align: left;
        color: #606060;
        margin-top: 8px;
        font-style: normal;
        -webkit-line-clamp: 2;
        height: 40px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .news-read-more {
        font-size: 20px;
        font-weight: 500;
        line-height: 24px;
        letter-spacing: 0;
        text-align: left;
    }
    .border-blog {
        border-radius: 10px;
        box-shadow: 0px 0px 15px 0px #00000040;

        .position-relative {
            background-color: black; /* Thêm màu đen cho lớp phủ */
            border-radius: 9px 9px 0 0;

            img {
                opacity: 1;
                transition:all 0.3s;
            }
        }

        &:hover {
            .news-date {
                background: #EC5938;
            }

            img {
                opacity: 0.7;
                transition:all 0.3s;
            }
        }
    }
    .uk-link, a {
        color: black;
    }

</style>
<div class="uk-margin"></div>
<div class="uk-section">
    <div class="owl-carousel owl owl-theme">
        @foreach($listBlogs as $Blog)
            <div class="item">
                <a href="{{route('detail.blog',$Blog->id)}}">
                    <div class="border-blog uk-card uk-card-primary uk-card-hover uk-light">
                        <div class="position-relative">
                            <img style="height: 231px; object-fit: cover;border-radius: 8px 8px 0 0" src="{{$Blog->img_main_blog}}" alt="{{$Blog->img_main_blog}}">
                            <div class="news-content-cmt d-flex position-absolute bottom-0">
                                <div class="news-date col-2">12</div>
                                <div class="d-flex justify-content-start col-10 cmt-group">
                                    <div class="news-name">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.1605 10.87C12.0605 10.86 11.9405 10.86 11.8305 10.87C9.45055 10.79 7.56055 8.84 7.56055 6.44C7.56055 3.99 9.54055 2 12.0005 2C14.4505 2 16.4405 3.99 16.4405 6.44C16.4305 8.84 14.5405 10.79 12.1605 10.87Z"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M7.1607 14.56C4.7407 16.18 4.7407 18.82 7.1607 20.43C9.9107 22.27 14.4207 22.27 17.1707 20.43C19.5907 18.81 19.5907 16.17 17.1707 14.56C14.4307 12.73 9.9207 12.73 7.1607 14.56Z"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                        admin
                                    </div>
                                    <div class="news-comments">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.4698 16.83L18.8598 19.99C18.9598 20.82 18.0698 21.4 17.3598 20.97L13.1698 18.48C12.7098 18.48 12.2599 18.45 11.8199 18.39C12.5599 17.52 12.9998 16.42 12.9998 15.23C12.9998 12.39 10.5398 10.09 7.49985 10.09C6.33985 10.09 5.26985 10.42 4.37985 11C4.34985 10.75 4.33984 10.5 4.33984 10.24C4.33984 5.68999 8.28985 2 13.1698 2C18.0498 2 21.9998 5.68999 21.9998 10.24C21.9998 12.94 20.6098 15.33 18.4698 16.83Z"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                            <path
                                                d="M13 15.2298C13 16.4198 12.56 17.5198 11.82 18.3898C10.83 19.5898 9.26 20.3598 7.5 20.3598L4.89 21.9098C4.45 22.1798 3.89 21.8098 3.95 21.2998L4.2 19.3298C2.86 18.3998 2 16.9098 2 15.2298C2 13.4698 2.94 11.9198 4.38 10.9998C5.27 10.4198 6.34 10.0898 7.5 10.0898C10.54 10.0898 13 12.3898 13 15.2298Z"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                        cmt(0)
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div>
                                <div class="title-news">
                                    @if(locationHelper() == 'kr')
                                        {{ $Blog->title_blog_ko ?? ''}}
                                    @elseif(locationHelper() == 'en')
                                        {{ $Blog->title_blog_en ?? ''}}
                                    @elseif(locationHelper() == 'cn')
                                        {{ $Blog->title_blog_zh_cn ?? ''}}
                                    @else
                                        {{ $Blog->title_blog_vi ?? ''}}
                                    @endif
                                </div>
                                <div class="shot-describe-news">
                                    @if(locationHelper() == 'kr')
                                        {!!  $Blog->describe_blog_ko ?? '' !!}
                                    @elseif(locationHelper() == 'en')
                                        {!! $Blog->describe_blog_en ?? '' !!}
                                    @elseif(locationHelper() == 'cn')
                                        {!! $Blog->describe_blog_zh_cn ?? '' !!}
                                    @else
                                        {!! $Blog->describe_blog_vi ?? '' !!}
                                    @endif
                                </div>
                            </div>
                            <div class="border-top p-3 mt-3"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="news-read-more">
                                    Read more
                                </div>
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4297 5.92969L20.4997 11.9997L14.4297 18.0697" stroke="black"
                                              stroke-width="1.5"
                                              stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.5 12H20.33" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </div>
                            </div>
                        </div>


                    </div>
                </a>
            </div>
        @endforeach


    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script>
    $('.owl').owlCarousel({
        loop: false,
        stagePadding: 15,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 2
            },
            960: {
                items: 3
            }

        }
    })
</script>
