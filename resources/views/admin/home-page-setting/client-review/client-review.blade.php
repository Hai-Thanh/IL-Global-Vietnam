<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
<link rel="stylesheet" href="{{asset('ui/scss/client-review.css')}}">
@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')

    <div class="pagetitle">
        <h1>Our Client Reviews</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt Our Client Reviews</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <main>
            <div class="content w-100">
                <section class="main-header grid">
                    <h1>Client Review</h1>
                    <a href="{{route('admin-creat-client-review')}}">
                        <button class="button">
                            <i class="fa-solid fa-plus"></i>
                            <span>Add new review</span>
                        </button>
                    </a>

                </section>

                {{--                <section class="table-header grid">--}}
                {{--                    <div>--}}
                {{--                        <div class="select">--}}
                {{--                            <select>--}}
                {{--                                <option>Choose action</option>--}}
                {{--                            </select>--}}
                {{--                        </div>--}}
                {{--                        <span>Selected 4 of 123 items</span>--}}
                {{--                    </div>--}}

                {{--                    <a class="button link">--}}
                {{--                        <span>Filters</span>--}}
                {{--                        <i class="fa-solid fa-angle-down"></i>--}}
                {{--                    </a>--}}
                {{--                </section>--}}

                <div class="card">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <div class="test"></div>
                                <div class="checkbox">
                                    <input type="checkbox" checked/>
                                    <span class="checkmark minus"></span>
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Thumbnail</th>
                            <th>Position</th>
                            <th>Describe</th>
                            <th>Star rating</th>
                            <th>Custom</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($reviews as $review)
                            <tr id="review_{{$review->id}}" class="selected border">
                                <td>
                                    <div class="checkbox">
                                        <input type="checkbox" checked/>
                                        <span class="checkmark"></span>
                                    </div>
                                </td>
                                <td>{{$review->id ?? ''}}</td>
                                <td>{{$review->name ?? ''}}</td>
                                <td><img class="thumbnail-review" src="{{$review->Thumbnail ?? ''}}" alt="Thumbnail">
                                </td>
                                <td>{{$review->position}}</td>
                                <td>
                                    @if(locationHelper() == 'kr')
                                        {{ $review->describe_ko ?? ''}}
                                    @elseif(locationHelper() == 'en')
                                        {{ $review->describe_en ?? ''}}
                                    @elseif(locationHelper() == 'cn')
                                        {{ $review->describe_zh_cn ?? ''}}
                                    @else
                                        {{ $review->describe_vi ?? ''}}
                                    @endif
                                </td>
                                <td>{{$review->star_rate}}</td>
                                <td>
                                    <a href="#" onclick="toggleStatus({{$review->id}})"><i
                                            class="fas fa-trash color-red p-3"></i></a> |
                                    <a href="{{route('admin-update-client-review',$review->id)}}"><i class="fa-solid fa-screwdriver-wrench p-3"></i></a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        async function toggleStatus(id) {
                            let status = `{{\App\Enums\ReviewStatus::DELETED}}`;
                            let url = `{{ route('admin-update-client-review-post', ['id' => ':id']) }}`;
                            url = url.replace(':id', id);
                            try {
                                await $.ajax({
                                    url: url,
                                    type: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    data: {status: status, id: id},
                                    success: function(response) {
                                        $(`#review_${id}`).addClass('d-none');
                                        alert('Delete successfully!');
                                        toast('Delete success!', 'success', 'top-left');
                                    },
                                });
                                // toast('Delete successfully!', 'success', 'top-left');
                            } catch (error) {
                                console.error(error);
                            }
                        }
                    </script>
                </div>


                {{--                <section class="table-footer grid">--}}
                {{--                    <span>Displaying 1-10 of 123 items</span>--}}
                {{--                    <div class="paging grid">--}}
                {{--                        <span>--}}
                {{--                            Page--}}
                {{--                            <input type="number" value="1">--}}
                {{--                            of 13--}}
                {{--                        </span>--}}
                {{--                        <div class="button icon">--}}
                {{--                            <i class="fa-solid fa-angle-left"></i>--}}
                {{--                        </div>--}}
                {{--                        <div class="button icon">--}}
                {{--                            <i class="fa-solid fa-angle-right"></i>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </section>--}}
            </div>
        </main>

    </section>

@endsection
