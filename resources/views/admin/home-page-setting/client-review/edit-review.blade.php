<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')
    <style>
        .thumbnail-review {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
    </style>
    <div class="pagetitle">
        <h1>Transportation company</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt Transportation company</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-update-client-review-post',$clReview->id)}}" method="post"
                  enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="nameClient">Tên khách hàng</label>
                            <input type="text" name="nameClient" id="nameClient" value="{{$clReview->name ?? ''}}"
                                   required>
                        </div>
                        <div>
                            <label for="describe">Describe</label>
                            <textarea name="describe" id="describe" required>{{$clReview->describe_vi ?? ''}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="avtClient">Chọn ảnh đại diện</label>
                                <input type="file" name="avtClient" id="avtClient" >
                                <img class="thumbnail-review" src="{{$clReview->Thumbnail}}"
                                     alt="{{$clReview->Thumbnail}}">
                            </div>

                            <div class="col-md-6">
                                <label for="starRating">Sao đánh giá</label>
                                <input type="number" name="starRating" id="starRating"
                                       value="{{$clReview->star_rate ?? ''}}" max="5" min="1" required>
                            </div>
                        </div>
                        <div>
                            <label for="position">Chức vụ</label>
                            <input type="text" name="position" id="position" value="{{$clReview->position ?? ''}}"
                                   required>
                            <input type="hidden" name="status" value="{{\App\Enums\ReviewStatus::ACTIVE}}">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
