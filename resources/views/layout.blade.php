{{--
در شاخه mix-test2 از لاراول مکس استفاده شده است. البته در ان شاخه تمامی جوانب پروزه به غیر از کدهای js عمل میکنند.
در حال بررسی
--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('keyword-description')
    <title>@yield('page-title')</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="relative whole-div">
        <div id="top"></div>
        <x-mobile-menu/>
        <x-header/>
        <!-- navigation component -->
        @yield('main-content')
    <!--footer component-->
        <x-footer/>
        <x-overlay/>
    </div>
    {{-- ابتدا با استفاده از لاراول میکس asset ها فراخوانی شدند و استایل ها و کدهای جاوااسکری\ت با موفقیت اعمال شد. اما
     توابعی که از طریق رویدادهای inline در html استفاده شده بودند، برای داکیومنت غیرقابل خواندن شد. مثل onclick=toggler() که در عمل دیباگ به صورت toggler() is undefined ارور دریافت میشد. به همین دلیل مجدد به کامیت های قبلی بازگشته شد --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    {{--<script src="js/swiper-customize.js"></script> --}}
    <script>
        //swiper customize
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        var swiper2 = new Swiper('.swiper-container2', {
            slidesPerView: 5,
            spaceBetween: 20,
            slidesPerGroup: 5,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        var swiper3 = new Swiper('.swiper-container3', {
            slidesPerView: 5,
            spaceBetween: 30,
            slidesPerGroup: 5,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        var swiper4 = new Swiper('.swiper-container4', {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="js/all.js"></script>
    @yield('extra-scripts')
</body>
</html>
