<link rel="stylesheet" href="{{asset('ui/scss/style-home.css')}}">
@extends('front-end.layouts.master')
@section('title')
    IL Global Việt Nam
@endsection
@section('content')
    <div class="slide-container">
        <div class="slide fade">
            <img src='https://images.unsplash.com/photo-1590595978583-3967cf17d2ea?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        </div>
        <div class="slide fade">
            <img src='https://images.unsplash.com/photo-1588807308097-fb6e5047df8c?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        </div>
        <div class="slide fade">
            <img src='https://images.unsplash.com/photo-1589808710416-24cf7ac026f2?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        </div>
        <div class="slide fade">
            <img src='https://images.unsplash.com/photo-1588796388882-a4d533c47e5e?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        </div>

        <a href="#" class="prev" title="Previous">&#10094</a>
        <a href="#" class="next" title="Next">&#10095</a>
    </div>
    <div class="dots-container">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slide")
        const dots = document.querySelectorAll('.dot')

        const init = (n) => {
            slides.forEach((slide, index) => {
                slide.style.display = "none"
                dots.forEach((dot, index) => {
                    dot.classList.remove("active")
                })
            })
            slides[n].style.display = "block"
            dots[n].classList.add("active")
        }
        document.addEventListener("DOMContentLoaded", init(currentSlide))
        const next = () => {
            currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
            init(currentSlide)
        }

        const prev = () => {
            currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
            init(currentSlide)
        }

        document.querySelector(".next").addEventListener('click', next)

        document.querySelector(".prev").addEventListener('click', prev)


        setInterval(() => {
            next()
        }, 5000);

        dots.forEach((dot, i) => {
            dot.addEventListener("click", () => {
                console.log(currentSlide)
                init(i)
                currentSlide = i
            })
        })


    </script>
@endsection
