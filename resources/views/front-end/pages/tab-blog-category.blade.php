@php use Illuminate\Support\Facades\DB; @endphp
<link rel="stylesheet" href="{{asset('ui/scss/tab-nhan-bao-gia.css')}}">

<div class="all-service">
    <label for="search" class="label-search">
        <svg class="svg-search" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19 19L13.0001 13M15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"
                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </label><input type="search" class="name-blog-search m-0" name="search" id="search" placeholder="Search">
</div>
<div class="all-service mt-3">
    <div class="all-service-title">{{ __('trans.Tin mới') }}
        <div class="border-bottom-service"></div>
    </div>
    @php
        $sub_tab = \App\Models\Blog::where('status', \App\Enums\BlogStatus::ACTIVE)->orderByDesc('id')->limit(3)->get();

    @endphp
    @foreach($sub_tab as $tab)
        <div class="d-flex flex-column mt-4">
            <div class="d-md-flex">
                <div><img style="width: 62px;height: 62px; object-fit: cover;border-radius: 50px" src="{{ $tab->img_main_blog ?? asset('ui/img/img-demo/container-demo.png')}}" alt=""></div>
                <div class="pl-2">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <div class="mr-4 sub-color">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2V5" stroke="#EC5938" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 2V5" stroke="#EC5938" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.5 9.08984H20.5" stroke="#EC5938" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="#EC5938" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.6937 13.7002H15.7027" stroke="#EC5938" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.6937 16.7002H15.7027" stroke="#EC5938" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.9945 13.7002H12.0035" stroke="#EC5938" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.9945 16.7002H12.0035" stroke="#EC5938" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.29529 13.7002H8.30427" stroke="#EC5938" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.29529 16.7002H8.30427" stroke="#EC5938" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            {{$formattedDate = isset($tab->created_at) ? \Carbon\Carbon::parse($tab->created_at)->format('d/m') : ''}}

                        </div>
                        <div class="sub-color">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.4698 16.83L18.8598 19.99C18.9598 20.82 18.0698 21.4 17.3598 20.97L13.1698 18.48C12.7098 18.48 12.2599 18.45 11.8199 18.39C12.5599 17.52 12.9998 16.42 12.9998 15.23C12.9998 12.39 10.5398 10.09 7.49985 10.09C6.33985 10.09 5.26985 10.42 4.37985 11C4.34985 10.75 4.33984 10.5 4.33984 10.24C4.33984 5.68999 8.28985 2 13.1698 2C18.0498 2 21.9998 5.68999 21.9998 10.24C21.9998 12.94 20.6098 15.33 18.4698 16.83Z" stroke="#EC5938" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13 15.2298C13 16.4198 12.56 17.5198 11.82 18.3898C10.83 19.5898 9.26 20.3598 7.5 20.3598L4.89 21.9098C4.45 22.1798 3.89 21.8098 3.95 21.2998L4.2 19.3298C2.86 18.3998 2 16.9098 2 15.2298C2 13.4698 2.94 11.9198 4.38 10.9998C5.27 10.4198 6.34 10.0898 7.5 10.0898C10.54 10.0898 13 12.3898 13 15.2298Z" stroke="#EC5938" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            ( {{ rand(1, 9) }} )
                        </div>
                    </div>
                    <div class="cmt-blog">
                        @if(locationHelper() == 'kr')
                            {!! $tab->title_blog_ko ?? '' !!}
                        @elseif(locationHelper() == 'en')
                            {!! $tab->title_blog_en ?? '' !!}
                        @elseif(locationHelper() == 'cn')
                            {!! $tab->title_blog_zh_cn ?? '' !!}
                        @else
                            {!! $tab->title_blog_vi ?? '' !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="all-service mt-3">
    <div class="all-service-title">{{ __('trans.All Category') }}
        <div class="border-bottom-service"></div>
    </div>
    @php
        $categories = \App\Models\Categories::where('status', \App\Enums\CategoriesStatus::ACTIVE)->get();
        $categoryCounts = \App\Models\Blog::select('category_id', DB::raw('count(*) as count'))
            ->groupBy('category_id')
            ->get();
    @endphp
    @foreach($categoryCounts as $category)
        @php
            $currentCategory = $categories->firstWhere('id', $category->category_id);
            $categoryName = '';
            if ($currentCategory) {
                if(locationHelper() == 'kr') {
                    $categoryName = $currentCategory->name_ko;
                } elseif(locationHelper() == 'en') {
                    $categoryName = $currentCategory->name_en;
                } elseif(locationHelper() == 'cn') {
                    $categoryName = $currentCategory->name_zh_cn;
                } else {
                    $categoryName = $currentCategory->name_vi;
                }
            }
        @endphp
        <div class="d-flex flex-column mt-4">
            <div class="border-bottom-category">
                <div class="d-md-flex justify-content-between align-items-center mb-2 hover-category hover-category">
                    <div class="category-title">
                        {{ $categoryName }}
                    </div>
                    <div class="view-category">{{$category->count}}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="all-service mt-3">
    <div class="all-service-title">{{ __('trans.All Category') }}
        <div class="border-bottom-service"></div>
    </div>
    <div class="d-flex mt-4 flex-wrap gap-2">
        @foreach($categories as $category)
        <a href=""><div class="btn-category">
                @if(locationHelper() == 'kr')
                    {{ $category->name_ko ?? ''}}
                @elseif(locationHelper() == 'en')
                    {{ $category->name_en ?? ''}}
                @elseif(locationHelper() == 'cn')
                    {{ $category->name_zh_cn ?? ''}}
                @else
                    {{ $category->name_vi ?? ''}}
                @endif
            </div></a>
        @endforeach
    </div>
</div>

