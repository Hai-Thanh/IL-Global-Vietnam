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
                    <a href="{{route('admin-create-blog')}}">
                        <button class="button">
                            <i class="fa-solid fa-plus"></i>
                            <span>Add new Blog</span>
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
                            {{--                            <th>Describe</th>--}}
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if($blogs ?? '')
                            @foreach($blogs as $blog)
                                <tr id="blog_{{$blog->id}}" class="selected border">
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" checked/>
                                            <span class="checkmark"></span>
                                        </div>
                                    </td>
                                    <td>{{$blog->id ?? ''}}</td>
                                    <td>
                                        @if(locationHelper() == 'kr')
                                            {{ $blog->title_blog_ko ?? ''}}
                                        @elseif(locationHelper() == 'en')
                                            {{ $blog->title_blog_en ?? ''}}
                                        @elseif(locationHelper() == 'cn')
                                            {{ $blog->title_blog_zh_cn ?? ''}}
                                        @else
                                            {{ $blog->title_blog_vi ?? ''}}
                                        @endif
                                    </td>
                                    <td><img class="thumbnail-review" src="{{$blog->img_main_blog ?? ''}}"
                                             alt="Thumbnail">
                                    </td>
                                    <td>
                                        <a href="#" onclick="toggleDeleteBlog({{$blog->id}})"><i
                                                class="fas fa-trash color-red p-3"></i></a> |
                                        <a href="{{route('admin-edit-blog',$blog->id)}}"><i
                                                class="fa-solid fa-screwdriver-wrench p-3"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif


                        </tbody>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        async function toggleDeleteBlog(id) {
                            let status = `{{\App\Enums\ReviewStatus::DELETED}}`;
                            let url = `{{ route('admin-edit-blog-up', ['id' => ':id']) }}`;
                            url = url.replace(':id', id);
                            try {
                                await $.ajax({
                                    url: url,
                                    type: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    data: {status: status, id: id},
                                    success: function (response) {
                                        $(`#blog_${id}`).addClass('d-none');
                                        alert('Delete successfully!');
                                    },
                                });
                                // toast('Delete successfully!', 'success', 'top-left');
                            } catch (error) {
                                console.error(error);
                                alert('Delete error!');
                            }
                        }
                    </script>
                </div>
            </div>
        </main>

    </section>

@endsection
