<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
<link rel="stylesheet" href="{{asset('ui/scss/client-review.css')}}">
@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')

    <div class="pagetitle">
        <h1>List Service</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt List Service</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <main>
            <div class="content w-100">
                <section class="main-header grid">
                    <h1>List Service</h1>
                    <a href="{{route('admin-service-create')}}">
                        <button class="button">
                            <i class="fa-solid fa-plus"></i>
                            <span>Add new Service</span>
                        </button>
                    </a>

                </section>

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
                            <th>Service Transport</th>
                            <th>Image</th>
                            <th>Describe</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if($services)
                            @foreach($services as $service)
                                <tr id="review_{{$service->id}}" class="selected border">
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" checked/>
                                            <span class="checkmark"></span>
                                        </div>
                                    </td>
                                    <td>{{$service->id ?? ''}}</td>
                                    <td>{{$service->type ?? ''}}</td>
                                    <td><img class="thumbnail-review" src="{{$service->img_main ?? ''}}" alt="Thumbnail">
                                    </td>
                                    <td>
                                        @if(locationHelper() == 'kr')
                                            {!! $service->describe_ko ?? '' !!}
                                        @elseif(locationHelper() == 'en')
                                            {!! $service->describe_en ?? '' !!}
                                        @elseif(locationHelper() == 'cn')
                                            {!! $service->describe_zh_cn ?? '' !!}
                                        @else
                                            {!! $service->describe_vi ?? '' !!}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" onclick="toggleStatusDelete({{$service->id}})"><i
                                                class="fas fa-trash color-red p-3"></i></a> |
                                        <a href="{{route('admin-service-edit',$service->type)}}"><i class="fa-solid fa-screwdriver-wrench p-3"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif


                        </tbody>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        async function toggleStatusDelete(id) {
                            let url = `{{ route('admin-service-delete', ['id' => ':id']) }}`;
                            url = url.replace(':id', id);
                            try {
                                await $.ajax({
                                    url: url,
                                    type: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    data: { id: id},
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
            </div>
        </main>

    </section>

@endsection
