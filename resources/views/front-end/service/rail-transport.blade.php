<link rel="stylesheet" href="{{asset('ui/scss/style-service.css')}}">
@extends('front-end.layouts.master')
@section('title')
    Rail transport
@endsection
@section('content')
    @include('front-end.layouts.header-service.header-service-air-transport')
    <div class="container main-service">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div>
                        <img style="object-fit: cover" class="w-100 h-100"
                             src="{{asset('ui/img/img-demo/air-demo.png')}}" alt="">
                    </div>
                    <div class="title-service">Air Transport</div>
                    <div class="describe-service">
                        Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum
                        quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes
                        port
                        lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard
                        dummy
                        text ever since the 1500s, when an unknown printer took a galley
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div>
                            <img src="{{asset('ui/img/img-demo/container-demo.png')}}" alt="11">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="title-2-service">Logistics Around the World</div>
                            <div class="describe-2-service mt-3">
                                Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui
                                dolorem
                                ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt
                                explicabo.
                            </div>
                            <div class="true-service mt-2 d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6L9 17L4 12" stroke="#EC5938" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="ml-1">
                                    Those who do not know how to pursue
                                </div>
                            </div>
                            <div class="true-service mt-2 d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6L9 17L4 12" stroke="#EC5938" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="ml-1">
                                    Pleasure rationally encounter
                                </div>
                            </div>
                            <div class="true-service mt-2 d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6L9 17L4 12" stroke="#EC5938" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="ml-1">
                                    Consequences that are extremely painful.
                                </div>
                            </div>
                            <div class="true-service mt-2 d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6L9 17L4 12" stroke="#EC5938" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="ml-1">
                                    Nor again is there anyone who loves or pursues
                                </div>
                            </div>
                            <div class="true-service mt-2 d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6L9 17L4 12" stroke="#EC5938" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="ml-1">
                                    Service Guarantee
                                </div>
                            </div>
                            <div class="true-service mt-2 d-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 6L9 17L4 12" stroke="#EC5938" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <div class="ml-1">
                                    Excellence in Healthcare every
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mo-ta-service">
                        <div class="title-3-service">Communicate With Us</div>
                        <div class="describe-3-service">
                            Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est
                            quidolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae
                            dictasunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed
                            sitamet finibus eros. Lorem IpsumLorem ipsum is simply free text used by copytyping
                            refreshing. Neque porro est quidolorem ipsum quia quaed inventore veritatis et quasi
                            architecto beatae vitae dictasunt explicabo. Aelltes port lacus quis enim var sed
                            efficitur turpis gilla sed sitamet finibus eros. Lorem Ipsum
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <img src="{{asset('ui/img/img-demo/img-demo-service-1.png')}}" alt="demo1">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('ui/img/img-demo/img-demo-service-2.png')}}" alt="demo1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                @include('front-end.service.tab-nhan-bao-gia-va-dich-vu')
            </div>
        </div>
    </div>
@endsection
