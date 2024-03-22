<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
<link rel="stylesheet" href="{{asset('ui/scss/client-review.css')}}">
@extends('admin.layouts.master')
@section('title')
    {{ __('trans.Admin IL Global') }}
@endsection
@section('content')

    <div class="pagetitle">
        <h1>{{ __('trans.Slide service header') }}</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">{{ __('trans.Home') }}</a></li>
                <li class="breadcrumb-item active">{{ __('trans.Slide service header') }}</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <main>
            <div class="content w-100">
                <section class="main-header grid">
                    <h1>{{ __('trans.Slide service header') }}</h1>
                    <a href="{{route('admin-create-slide')}}">
                        <button class="button">
                            <i class="fa-solid fa-plus"></i>
                            <span>{{ __('trans.Add new Slide') }}</span>
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
                            <th>{{ __('trans.Title Slide') }}</th>
                            <th>{{ __('trans.Image') }}</th>
                                                        <th>{{ __('trans.Service') }}</th>
                            <th>{{ __('trans.Edit') }}</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if($slides ?? '')
                            @foreach($slides as $slide)
                                <tr id="slide_{{$slide->id}}" class="selected border">
                                    <td>
                                        <div class="checkbox">
                                            <input type="checkbox" checked/>
                                            <span class="checkmark"></span>
                                        </div>
                                    </td>
                                    <td>{{$slide->id ?? ''}}</td>
                                    <td>
                                        @if(locationHelper() == 'kr')
                                            {{ $slide->title_slide_ko ?? ''}}
                                        @elseif(locationHelper() == 'en')
                                            {{ $slide->title_slide_en ?? ''}}
                                        @elseif(locationHelper() == 'cn')
                                            {{ $slide->title_slide_zh_cn ?? ''}}
                                        @else
                                            {{ $slide->title_slide_vi ?? ''}}
                                        @endif
                                    </td>
                                    <td><img class="thumbnail-review" src="{{$slide->image_slide ?? ''}}"
                                             alt="Thumbnail">
                                    </td>
                                    <td>{{\App\Models\Service::where('id',$slide->id_service)->value('type')}}</td>

                                    <td>
                                        <a href="#" onclick="toggleDeleteSlide({{$slide->id}})"><i
                                                class="fas fa-trash color-red p-3"></i></a> |
                                        <a href="{{route('admin-edit-slide',$slide->id)}}"><i
                                                class="fa-solid fa-screwdriver-wrench p-3"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif


                        </tbody>
                    </table>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        async function toggleDeleteSlide(id) {
                            let status = `{{\App\Enums\SlideStatus::Delete}}`;
                            let url = `{{ route('admin-edit-slide-up', ['id' => ':id']) }}`;
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
                                        $(`#slide_${id}`).addClass('d-none');
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
