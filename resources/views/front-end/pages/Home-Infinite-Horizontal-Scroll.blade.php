<style>
    .il-img-background-shipping {
        background: url({{asset('ui/img/banner-services/danh-sach-hang-tau.png')}}) no-repeat 100% 100%;
        min-height: 50%;
        background-size: cover;
    }
    .scroller__inner {
        padding-block: 1rem;
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .scroller[data-animated="true"] {
        overflow: hidden;
        mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
    }

    .scroller[data-animated="true"] .scroller__inner {
        width: max-content;
        flex-wrap: nowrap;
        animation: scroll var(--_animation-duration, 40s)
        var(--_animation-direction, forwards) linear infinite;
    }

    .scroller[data-direction="right"] {
        --_animation-direction: reverse;
    }

    .scroller[data-direction="left"] {
        --_animation-direction: forwards;
    }

    .scroller[data-speed="fast"] {
        --_animation-duration: 10s;
    }

    @keyframes scroll {
        to {
            transform: translate(calc(-50% - 0.5rem));
        }
    }

    .tag-list {
        margin: 0;
        padding-inline: 0;
        list-style: none;
    }

    .tag-list li {
        padding: 1rem;
        background: hsl(215, 25%, 27%);
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem -0.25rem hsl(218, 33%, 9%);
    }
    .tag-list img {
        width: 376px;
        height: 198px;

    }
    .title-hang-tau {
        padding: 40px;
        font-size: 48px;
        font-weight: 700;
        line-height: 59px;
        letter-spacing: 0;
        text-align: left;
        color: #FFFFFF;

    }

    /* for testing purposed to ensure the animation lined up correctly */
    .test {
        background: red !important;
    }
</style>
<div class="il-img-background-shipping">
    <div class="title-hang-tau" style="text-align: center">Danh sách hãng tàu</div>

    <div class="scroller" data-speed="fast">
        <ul class="tag-list scroller__inner">
            <img src="{{asset('ui/img/list-of-shipping-companies/image 1.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 2.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 3.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 4.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 5.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 6.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 7.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 8.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 9.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 10.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 11.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 12.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 13.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 14.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 15.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 16.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 17.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 18.png')}}" alt="" />
            <img src="{{asset('ui/img/list-of-shipping-companies/image 19.png')}}" alt="" />
        </ul>
    </div>
</div>

<script>
    const scrollers = document.querySelectorAll(".scroller");

    // If a user hasn't opted in for recuded motion, then we add the animation
    if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        addAnimation();
    }

    function addAnimation() {
        scrollers.forEach((scroller) => {
            // add data-animated="true" to every `.scroller` on the page
            scroller.setAttribute("data-animated", true);

            // Make an array from the elements within `.scroller-inner`
            const scrollerInner = scroller.querySelector(".scroller__inner");
            const scrollerContent = Array.from(scrollerInner.children);

            // For each item in the array, clone it
            // add aria-hidden to it
            // add it into the `.scroller-inner`
            scrollerContent.forEach((item) => {
                const duplicatedItem = item.cloneNode(true);
                duplicatedItem.setAttribute("aria-hidden", true);
                scrollerInner.appendChild(duplicatedItem);
            });
        });
    }

</script>
