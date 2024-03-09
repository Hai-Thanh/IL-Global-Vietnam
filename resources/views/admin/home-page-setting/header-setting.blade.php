<link rel="stylesheet" href="{{asset('admin/scss/admin-style-header-setting.css')}}">
@extends('admin.layouts.master')
@section('title')
    Admin IL Global
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Admin IL Global</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Home</a></li>
                <li class="breadcrumb-item active">Cài Đặt Header</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <form action="{{route('admin-header-setting.update')}}" method="post">
                @csrf
                <div class="row">
                    <div class="time-in-header col-md-4">
                        <label for="time-in-header">Chọn giờ vào</label>
                        <input type="time" name="time-in-header" id="time-in-header" value="{{$header_setting->time_in}}">
                    </div>
                    <div class="time-out-header col-md-4">
                        <label for="time-out-header">Chọn giờ ra</label>
                        <input type="time" name="time-out-header" id="time-out-header" value="{{$header_setting->time_out}}">
                    </div>
                    <div class="choose-a-day-off col-md-4">
                        <label for="choose-day-off" class="d-flex">Chọn ngày nghỉ trong tuần:  <i><b id="selected-days">{{ $header_setting->day_off }}
                                </b></i>
                        </label>
                        <select name="choose-day-off[]" id="choose-day-off" multiple>
                            <option value="{{\App\Enums\ChooseDate::Monday}}" {{ in_array(\App\Enums\ChooseDate::Monday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Monday</option>
                            <option value="{{\App\Enums\ChooseDate::Tuesday}}" {{ in_array(\App\Enums\ChooseDate::Tuesday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Tuesday</option>
                            <option value="{{\App\Enums\ChooseDate::Wednesday}}" {{ in_array(\App\Enums\ChooseDate::Wednesday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Wednesday</option>
                            <option value="{{\App\Enums\ChooseDate::Thursday}}" {{ in_array(\App\Enums\ChooseDate::Thursday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Thursday</option>
                            <option value="{{\App\Enums\ChooseDate::Friday}}" {{ in_array(\App\Enums\ChooseDate::Friday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Friday</option>
                            <option value="{{\App\Enums\ChooseDate::Saturday}}" {{ in_array(\App\Enums\ChooseDate::Saturday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Saturday</option>
                            <option value="{{\App\Enums\ChooseDate::Sunday}}" {{ in_array(\App\Enums\ChooseDate::Sunday, explode(',', $header_setting->day_off)) ? 'selected' : '' }}>Sunday</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="link-linkedin">Link social LinkedIn</label>
                        <input type="text" name="link-linkedin" id="link-linkedin" value="{{$header_setting->link_linke_in}}">
                    </div>
                    <div class="col-md-6">
                        <label for="link-fb">Link social FaceBook</label>
                        <input type="text" name="link-fb" id="link-fb" value="{{$header_setting->link_fb}}">
                    </div>
                    <div class="col-md-6">
                        <label for="link-tw">Link social Twitter</label>
                        <input type="text" name="link-tw" id="link-tw" value="{{$header_setting->link_tw}}">
                    </div>
                    <div class="col-md-6">
                        <label for="link-ins">Link social Instagram</label>
                        <input type="text" name="link-ins" id="link-ins" value="{{$header_setting->link_ins}}">
                    </div>
                    <div class="col-md-6">
                        <label for="link-yt">Link social Youtube</label>
                        <input type="text" name="link-yt" id="link-yt" value="{{$header_setting->link_yt}}">
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-start align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        document.getElementById('choose-day-off').addEventListener('change', function () {
            var selectedDays = Array.from(this.selectedOptions).map(option => option.textContent);
            document.getElementById('selected-days').textContent = selectedDays.join(', ');
            if (selectedDays.length > 0) {
                document.getElementById('selected-days').style.display = 'block';
            } else {
                document.getElementById('selected-days').style.display = 'none';
            }
        });
    </script>
@endsection
