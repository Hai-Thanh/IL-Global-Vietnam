<link rel="stylesheet" href="{{asset('ui/scss/style-about-us.css')}}">
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
            <style>
                .title-contact {
                    font-size: 48px;
                    font-weight: 800;
                    line-height: 60px;
                    letter-spacing: 0;
                    text-align: center;
                    color: black;

                }
                .form-input-contact {
                    margin-top: 40px;
                    form {
                        margin-bottom: 100px;
                        input {
                            border: 1px solid #A9A9A9;
                            border-radius: 8px;
                            padding: 16px;
                            height: 55px;
                            margin-bottom: 30px;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 23px;
                            letter-spacing: 0;
                            text-align: left;
                            color: #929292;

                        }
                        textarea {
                            border: 1px solid #A9A9A9;
                            border-radius: 8px;
                            padding: 32px 16px 16px 32px;
                            margin-bottom: 30px;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 23px;
                            letter-spacing: 0;
                            text-align: left;
                            color: #929292;
                            width: 100%;
                        }
                        .il-btn-read-more-black {
                            height: 50px;
                            border: none;
                            position: relative;
                            align-items: center;
                            display: flex;
                            background: #EC5938;
                            justify-content: center;
                            color: white;
                            font-size: 16px;
                            font-weight: 400;
                            line-height: 20px;
                            text-align: left;
                            transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
                            transition: background .4s, border-color .4s, color .4s;
                            z-index: 0;
                            overflow: hidden;
                            min-width: 200px;
                            padding: 17px 33px 15px;
                            letter-spacing: normal;
                            white-space: nowrap;
                            text-overflow: ellipsis;
                            cursor: pointer;
                            vertical-align: middle;
                            user-select: none;

                            &:hover {
                                transition: background .4s .4s, border-color .4s 0s, color .2s 0s;
                                font-weight: 600;
                                color: #ffffff;

                                &::before {
                                    opacity: 1;
                                    transform: translate3d(0, 0, 0) scale3d(1, 1, 1);
                                }

                                .triangle-bottom-right {
                                    border-color: transparent transparent transparent #8F8F8F33;;
                                }
                            }

                            &:before {
                                content: '';
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 101%;
                                height: 101%;
                                background: #122E38;
                                color: #ffffff;
                                z-index: -1;
                                opacity: 0;
                                transform: translateX(-200px);
                                transition: transform 0.42s, opacity 1.42s;
                                border-radius: inherit;
                                transition-timing-function: cubic-bezier(0.2, 1, 0.3, 1);
                            }

                            a {
                                color: #FFFFFF;
                            }

                            .triangle-bottom-right {
                                position: absolute;
                                width: 0;
                                height: 0;
                                border-style: solid;
                                border-width: 16px 0 0 16px;
                                border-color: transparent transparent transparent #ffffff;
                                left: 2px;
                                bottom: 2px;
                            }
                        }
                    }
                }
            </style>
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
