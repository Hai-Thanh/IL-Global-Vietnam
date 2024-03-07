<link rel="stylesheet" href="{{asset('ui/scss/style-contact.css')}}">
@extends('front-end.layouts.master')
@section('title')
    Contact
@endsection
@section('content')
    @include('front-end.layouts.header-contact')
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d232.84256778577986!2d105.75695580472579!3d20.973344204952294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313453779ecd7b59%3A0x21695bf72a03120f!2zQ8O0bmcgdHkgVE5ISCBJTCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1709793223796!5m2!1svi!2s"
            width="100%" height="600" style="border:0;border-radius: 8px;margin: 80px 0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <div class="title-contact">Liên hệ chúng tôi</div>
            <div class="form-input-contact">
                <form action="">
                    <div class="row">
                        <div class="col-6 d-flex flex-column">
                            <label for="name"></label>
                            <input type="text" name="name" id="name" placeholder="Tên của bạn" required>
                            <label for="email"></label>
                            <input type="email" name="email" id="email" placeholder="Email của bạn" required>
                            <label for="phone"></label>
                            <input type="number" name="phone" id="phone" placeholder="Số điện thoại của bạn" required>
                        </div>
                        <div class="col-6">
                            <label for="message"></label>
                            <textarea name="message" id="message" rows="8" placeholder="Tin nhắn của bạn" required></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="il-btn-read-more-black" type="submit">
                            <div class="triangle-bottom-right"></div>
                            submit
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
