@extends('layout')
@section('keyword-description')
    <meta name="keyword" content="digikala, دیجی کالا">
    <meta name="description" content="this is home page of digikala">
@show
@section('page-title','فروشگاه اینترنتی دیجی کالا')
@section('main-content')
    <main>
        <!-- main top container -->
        <article class="main-top-container">
            <div class="main-top">
                <div class="bullets-slider-container">
                    <!--bullets slider component attached-->
                    <div class="bullets-slider">
                        <div class="carousel relative ">
                            <div class="carousel-inner relative overflow-hidden bullets-slider">
                                <!--Slide 1-->
                                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                                <div class="carousel-item absolute opacity-0 w-full h-full" >
                                    <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center rounded-2xl">
                                        <img src="images/maintop-1.jpg" alt="product img" class="rounded-lg">

                                    </div>
                                </div>
                                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	 transform hover:translate-x-0.5 rounded-full e leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200	transform hover:translate-x-0.5	 rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!--Slide 2-->
                                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 w-full h-full" >
                                    <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">
                                        <img src="images/maintop-2.jpg" alt="product img" class="rounded-lg">
                                    </div>
                                </div>
                                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full   leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200  transform hover:translate-x-0.5  rounded-full  leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!--Slide 3-->
                                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                                <div class="carousel-item absolute opacity-0 w-full h-full">
                                    <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">
                                        <img src="images/maintop-3.jpg" alt="product img" class="rounded-lg">

                                    </div>
                                </div>
                                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full  leading-tight text-center z-9 inset-y-0 right-0 my-auto">‹</label>
                                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-5xl font-bold text-gray-200 transform hover:translate-x-0.5 rounded-full leading-tight text-center z-9 inset-y-0 left-0 my-auto">›</label>

                                <!-- Add additional indicators for each slide-->
                                <ol class="carousel-indicators">
                                    <li class="inline-block mr-3">
                                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                    </li>
                                    <li class="inline-block mr-3">
                                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white transform hover:scale-125">•</label>
                                    </li>
                                </ol>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-top-sides">
                    <div class="side">
                        <a href="side product page">
                            <img src="images/maintop-topside.gif" alt="product gif">
                        </a>
                    </div>
                    <div class="side">
                        <a href="side product page">
                            <img src="images/maintop-bottomside.jpg" alt="product gif">
                        </a>
                    </div>
                </div>
            </div>
        </article>
        <!--incredible specials component-->
        <div class="">
            <section class="incredible-specials-container">
                <div class="incredible-specials">
                    <div class="specials-title">
                        <a href="#incredible-specials">
                            <div>
                                <img src="images/incredible-pic.png" alt="incredible product">
                                <div  class="specials-button flex flex-row content-center items-center">
                                    <div class="specials-title-text">مشاهده همه</div>
                                    <i class="fa fa-chevron-left mr-1"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="specials">
                        <div class="product-items ">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach($productItemContainer3 as $productItem3 )
                                        <div class="swiper-slide" >
                                            <div class="product-item-container-3 rounded-2xl">
                                                <div class="product-item">
                                                    <div>
                                                        <a href="#product-page">
                                                            <img src={!!$productItem3['img']!!}} alt="a product example" class="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-title">
                                                        <a href="#product-page">
                                                            {{$productItem3['product-title']}}
                                                        </a>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="product-old-price">
                                                            <del> {{$productItem3['old-price']}}</del>
                                                            <span class="old-price-discount">
                                                     {{$productItem3['discount']}}
                                                </span>
                                                        </div>
                                                        <div class="product-new-price">
                                                            {{$productItem3['new-price']}}
                                                            <span class="new-price-currency">تومان</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                        </div>
                        <!--product item component-->
                        <!-- Swiper JS -->
                    </div>

                </div>
        </div>

        </section>
        </div>
        <!--products component-->
        <div class="page-section relative">
            <section class="page-section-standard relative">
                <div class="products">
                    <div class="head">
                        <span class="text-gray-400 mobile-title	">منتخب بهترین کالاها</span>
                        <span class="head-title">
                            گوشی موبایل
                        </span>
                        <div class="head-link">
                            <a href="#products-page"> مشاهده همه</a>
                        </div>
                    </div>
                    <div class="boxes static">
                        <div class="items">
                            <!-- product item component -->
                            <div class="swiper-container2">
                                <div class="swiper-wrapper">
                                    @foreach($productItemContainer4 as $productItem4 )
                                        <div class="swiper-slide">
                                            <div class="product-item-container-4">
                                                <div class="product-item">
                                                    <div>
                                                        <a href="#product-page">
                                                            <img src={!!$productItem4['img']!!}} title="phone1" alt="a product example" class="product-img">
                                                        </a>
                                                    </div>
                                                    <div class="product-title">
                                                        <a href="#product-page">
                                                            {{$productItem4['product-title']}}
                                                        </a>
                                                    </div>
                                                    <div class="product-price">
                                                        <div class="product-old-price">
                                                            <del>{{$productItem4['old-price']}}</del>
                                                            <span class="old-price-discount">
                                                     {{$productItem4['discount']}}
                                                </span>
                                                        </div>
                                                        <div class="product-new-price">
                                                            {{$productItem4['new-price']}}
                                                            <span class="new-price-currency">تومان</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Add Pagination -->
                                <!-- Add Arrows -->
                                <div class="swiper-button-next arrow-left-3">
                                </div>
                                <div class="swiper-button-prev arrow-right-3"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>

        </div>
        <!--brands component -->
        <div class="page-section ">
            <section class="swiper-brands-container page-section-standard pt-1 relative">
                <div class="head">
                    <span class="text-gray-500  mobile-title	">برندهای محبوب</span>
                    <span class="head-title">
                            برندهای ویژه
                        </span>
                    <div class="head-link">

                    </div>
                </div>
                <div class="swiper-brands flex flex-row ">
                    <div class="swiper-container3">
                        <div class="swiper-wrapper">
                            @foreach($swiperBrands as $brand)
                                <div class="swiper-slide" style="">
                                    <div class="swiper-brands-image-container">
                                        <a href="#brand-page" class="banner-brand-link">
                                            <img src={!! $brand['img'] !!} alt="brand">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <!-- Add Arrows -->
                        <div class="swiper-button-next arrow-left-3">
                        </div>
                        <div class="swiper-button-prev arrow-right-3"></div>
                    </div>
                </div>

            </section>
        </div>
        <!--promotion categories component-->
        <div class="page-section promotion-cats-section">
            <div class="page-section-standard promotion-categories">
                <div class="cat-head">
                    <div class="cat-title">
                        بیش از ۲،۰۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف
                    </div>
                </div>
                <div class="promotion-cats">
                    <!--promotion cat section-->
                    @foreach($promotionSections as $promotionsection)
                        <a href="#category" class="promotion-cat-sec">
                            <div class="promotion-cat-icon">
                                <i class={!! $promotionsection['icon'] !!}></i>
                            </div>
                            <div class="promotion-cat-name">
                                {!! $promotionsection['cat-name'] !!}
                            </div>
                            <div class="promotion-cat-quantity">
                                {!! $promotionsection['cat-quantity'] !!}
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>

    </main>
    @endsection
