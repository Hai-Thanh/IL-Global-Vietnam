<link rel="stylesheet" href="{{asset('ui/scss/style-service.css')}}">
@extends('front-end.layouts.master')
@section('title')
    {{ __('trans.Detail blog') }}
@endsection
@section('content')
    @include('front-end.layouts.header-blog')
    <div class="container main-service">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div>
                        <img style="object-fit: cover;height: 478px;" class="w-100"
                             src="{{$blog->img_main_blog}}" alt="{{$blog->img_main_blog}}">
                    </div>
                    <div class="title-service"> @if(locationHelper() == 'kr')
                            {{ $blog->title_blog_ko ?? ''}}
                        @elseif(locationHelper() == 'en')
                            {{ $blog->title_blog_en ?? ''}}
                        @elseif(locationHelper() == 'cn')
                            {{ $blog->title_blog_zh_cn ?? ''}}
                        @else
                            {{ $blog->title_blog_vi ?? ''}}
                        @endif</div>
                    <div class="describe-service">
                        @if(locationHelper() == 'kr')
                            {!! $blog->describe_blog_ko ?? '' !!}
                        @elseif(locationHelper() == 'en')
                            {!! $blog->describe_blog_en ?? '' !!}
                        @elseif(locationHelper() == 'cn')
                            {!! $blog->describe_blog_zh_cn ?? '' !!}
                        @else
                            {!! $blog->describe_blog_vi ?? '' !!}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="mo-ta-service h-100">
                        <div class="title-3-service">
                            @if(locationHelper() == 'kr')
                                {{ $blog->title_sub_blog_ko ?? ''}}
                            @elseif(locationHelper() == 'en')
                                {{ $blog->title_sub_blog_en ?? ''}}
                            @elseif(locationHelper() == 'cn')
                                {{ $blog->title_sub_blog_zh_cn ?? ''}}
                            @else
                                {{ $blog->title_sub_blog_vi ?? ''}}
                            @endif</div>
                        <div class="describe-3-service">
                            @if(locationHelper() == 'kr')
                                {!! $blog->describe_sub_blog_ko ?? '' !!}
                            @elseif(locationHelper() == 'en')
                                {!! $blog->describe_sub_blog_en ?? '' !!}
                            @elseif(locationHelper() == 'cn')
                                {!! $blog->describe_sub_blog_zh_cn ?? '' !!}
                            @else
                                {!! $blog->describe_sub_blog_vi ?? '' !!}
                            @endif
                        </div>
                    </div>
                </div>
                {{-- tags --}}

                <div class="border-top-bottom">
                    <div class="row d-md-flex justify-content-between align-items-center">
                        <div class="col d-md-flex">
                            <div class="tags-content">{{ __('trans.Tags') }}</div>
                            <div class="d-md-flex gap-2">
                                <a href="">
                                    <div class="btn-comment-tags mt-3 mt-md-0">{{ __('trans.Transport') }}</div>
                                </a>
                                <a href="">
                                    <div class="btn-comment-tags mt-3 mt-md-0">{{ __('trans.Delivery') }}</div>
                                </a>
                                <a href="">
                                    <div class="btn-comment-tags mt-3 mt-md-0">{{ __('trans.Reply') }}</div>
                                </a>
                            </div>

                        </div>
                        <div class="col d-flex gap-3 justify-content-end">
                            <div><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#EC5938"/>
                                    <g clip-path="url(#clip0_853_1617)">
                                        <path d="M29.5034 12H18.4966C14.9143 12 12 14.9143 12 18.4966V29.5036C12 33.0857 14.9143 36 18.4966 36H29.5036C33.0857 36 36 33.0857 36 29.5036V18.4966C36 14.9143 33.0857 12 29.5034 12ZM34.593 29.5036C34.593 32.3098 32.3098 34.593 29.5034 34.593H18.4966C15.6901 34.593 13.407 32.3098 13.407 29.5036V18.4966C13.407 15.6901 15.6901 13.407 18.4966 13.407H29.5036C32.3098 13.407 34.593 15.6901 34.593 18.4966V29.5036Z" fill="#EC5938"/>
                                        <path d="M23.9998 17.4375C20.3813 17.4375 17.4375 20.3813 17.4375 23.9998C17.4375 27.6183 20.3813 30.5621 23.9998 30.5621C27.6183 30.5621 30.5621 27.6183 30.5621 23.9998C30.5621 20.3813 27.6183 17.4375 23.9998 17.4375ZM23.9998 29.1551C21.1573 29.1551 18.8445 26.8425 18.8445 23.9998C18.8445 21.1573 21.1573 18.8445 23.9998 18.8445C26.8425 18.8445 29.1551 21.1573 29.1551 23.9998C29.1551 26.8425 26.8425 29.1551 23.9998 29.1551Z" fill="#EC5938"/>
                                        <path d="M30.7203 15.1069C29.651 15.1069 28.7812 15.9769 28.7812 17.046C28.7812 18.1154 29.651 18.9853 30.7203 18.9853C31.7897 18.9853 32.6596 18.1154 32.6596 17.046C32.6596 15.9767 31.7897 15.1069 30.7203 15.1069ZM30.7203 17.5781C30.427 17.5781 30.1882 17.3394 30.1882 17.046C30.1882 16.7525 30.427 16.5139 30.7203 16.5139C31.0139 16.5139 31.2526 16.7525 31.2526 17.046C31.2526 17.3394 31.0139 17.5781 30.7203 17.5781Z" fill="#EC5938"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_853_1617">
                                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#EC5938"/>
                                    <g clip-path="url(#clip0_853_1618)">
                                        <path d="M36 16.5585C35.1075 16.95 34.1565 17.2095 33.165 17.3355C34.185 16.7265 34.9635 15.7695 35.3295 14.616C34.3785 15.183 33.3285 15.5835 32.2095 15.807C31.3065 14.8455 30.0195 14.25 28.6155 14.25C25.8915 14.25 23.6985 16.461 23.6985 19.1715C23.6985 19.5615 23.7315 19.9365 23.8125 20.2935C19.722 20.094 16.1025 18.1335 13.671 15.147C13.2465 15.8835 12.9975 16.7265 12.9975 17.634C12.9975 19.338 13.875 20.8485 15.183 21.723C14.3925 21.708 13.617 21.4785 12.96 21.117C12.96 21.132 12.96 21.1515 12.96 21.171C12.96 23.562 14.6655 25.548 16.902 26.0055C16.5015 26.115 16.065 26.1675 15.612 26.1675C15.297 26.1675 14.979 26.1495 14.6805 26.0835C15.318 28.032 17.127 29.4645 19.278 29.511C17.604 30.8205 15.4785 31.6095 13.1775 31.6095C12.774 31.6095 12.387 31.5915 12 31.542C14.1795 32.9475 16.7625 33.75 19.548 33.75C28.602 33.75 33.552 26.25 33.552 19.749C33.552 19.5315 33.5445 19.3215 33.534 19.113C34.5105 18.42 35.331 17.5545 36 16.5585Z" fill="#EC5938"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_853_1618">
                                            <rect width="24" height="24" fill="white" transform="translate(12 12)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#EC5938"/>
                                    <path d="M33.5994 33.5997V26.5677C33.5994 23.1117 32.8554 20.4717 28.8234 20.4717C26.8794 20.4717 25.5834 21.5277 25.0554 22.5357H25.0074V20.7837H21.1914V33.5997H25.1754V27.2397C25.1754 25.5597 25.4874 23.9517 27.5514 23.9517C29.5914 23.9517 29.6154 25.8477 29.6154 27.3357V33.5757H33.5994V33.5997Z" fill="#EC5938"/>
                                    <path d="M14.7109 20.7837H18.6949V33.5997H14.7109V20.7837Z" fill="#EC5938"/>
                                    <path d="M16.7024 14.3999C15.4304 14.3999 14.3984 15.4319 14.3984 16.7039C14.3984 17.9759 15.4304 19.0319 16.7024 19.0319C17.9744 19.0319 19.0064 17.9759 19.0064 16.7039C19.0064 15.4319 17.9744 14.3999 16.7024 14.3999Z" fill="#EC5938"/>
                                </svg>
                            </div>
                            <div><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#EC5938"/>
                                    <path d="M25.8594 36V25.0533H29.5323L30.0833 20.7859H25.8594V18.0618C25.8594 16.8266 26.201 15.9849 27.9742 15.9849L30.232 15.984V12.1671C29.8415 12.1163 28.5012 12 26.9412 12C23.6837 12 21.4536 13.9884 21.4536 17.6391V20.7859H17.7695V25.0533H21.4536V36H25.8594Z" fill="#EC5938"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- comments --}}
                <div>
                    <div class="row">
                        <div class="comments-top">{{ __('trans.Comments') }} (2)</div>
                    </div>
                    <div class="border-bottom-comment"></div>
                    <div class="row">
                        <div class="d-flex card-comment">
                            <div class="">
                                <img style="width: 100px;height: 100px;"
                                     src="{{asset('ui/img/img-demo/img-demo-service-1.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-title-comment">Isaac Herman</div>
                                <div class="date-comment">June 14, 2023 / 12:00 AM</div>
                                <div class="comment">Imperdiet in nulla sed viverraut loremut dapib estetur Lorem ipsum
                                    dolor sit amet
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniy minim sed exe
                                    ullamco laboris nisi ut aliquip cepteur
                                </div>
                                <a href="">
                                    <div class="btn-comment d-flex justify-content-center align-items-center">{{ __('trans.Reply') }}</div>
                                </a>
                            </div>

                        </div>
                        <div class="d-flex card-comment">
                            <div class="">
                                <img style="width: 100px;height: 100px;"
                                     src="{{asset('ui/img/img-demo/img-demo-service-1.png')}}" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-title-comment">Isaac Herman</div>
                                <div class="date-comment">June 14, 2023 / 12:00 AM</div>
                                <div class="comment">Imperdiet in nulla sed viverraut loremut dapib estetur Lorem ipsum
                                    dolor sit amet
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eniy minim sed exe
                                    ullamco laboris nisi ut aliquip cepteur
                                </div>
                                <a href="">
                                    <div class="btn-comment d-flex justify-content-center align-items-center">{{ __('trans.Reply') }}</div>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="comments-top">{{ __('trans.Comments') }} (2)</div>
                    </div>
                    <div class="border-bottom-comment"></div>
                    <div class="row">
                        <form class="post-comment" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name"></label><input type="text" name="name" id="name"
                                                                     placeholder="{{ __('trans.Your name') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email"></label><input type="email" name="email" id="email"
                                                                      placeholder="{{ __('trans.Your email') }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="phone"></label><input type="number" name="phone" id="phone"
                                                                      placeholder="{{ __('trans.Your phone') }}" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="message"></label><textarea name="message" id="message"
                                                                           placeholder="{{ __('trans.Your message') }}" required></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start align-items-center mt-3">
                                <button class="il-btn-read-more-black" type="submit">
                                    <div class="triangle-bottom-right"></div>
                                    {{ __('trans.Post Comment') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                @include('front-end.pages.tab-blog-category')
            </div>
        </div>
    </div>
@endsection
