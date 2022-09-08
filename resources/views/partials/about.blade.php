@extends('layouts.master')
@section('content')
@include('partials.preloader')
<main class="main">
	<!-- Menu -->
	@include('partials.menu')

	<div class="wrapper">

		<!-- Sidebar -->
        @include('partials.sidebar')

<!-- Content -->
<div class="content js-scroll">
    <!-- About -->
    <div class="section mt-0">
        <h1 class="title title--h1 title__separate">درمورد من</h1>
        <div class="pt-2 pt-sm-3">
            <p>من مدیر خلاق و طراح UI / UX از سیدنی ، استرالیا هستم که در زمینه توسعه وب و رسانه های چاپی کار می کنم. من از تبدیل مشکلات پیچیده به طرح های ساده ، زیبا و بصری لذت می برم.</p>
            <p class="mb-0">کار من ساخت وب سایت شما به گونه ای است که کاربردی و کاربر پسند باشد اما در عین حال جذاب باشد. علاوه بر این ، من لمس شخصی به محصول شما اضافه می کنم و مطمئن هستم که چشم نواز است و کاربرد آن آسان است. هدف من این است که پیام و هویت شما را با خلاقانه ترین راه بیان کنم. من طراحی وب را برای بسیاری از شرکتهای معروف مارک ایجاد کردم.</p>
        </div>
    </div>

    <!-- What -->
    <div class="section">
        <h2 class="title title--h2">کاری که انجام می دهم</h2>
        <div class="row">
            <!-- Case Item -->
            <div class="col-12 col-lg-6 case-item-wrap">
                <div class="case-item">
                    <img class="case-item__icon" src="http://netgon.net/artstyles/v-card2/assets/icons/icon-design.svg" alt="">
                    <h3 class="title title--h3">طراحی وب سایت</h3>
                    <p class="case-item__caption">مدرن ترین و با کیفیت ترین طراحی ساخته شده در سطح حرفه ای. </p>
                </div>
            </div>

            <!-- Case Item -->
            <div class="col-12 col-lg-6 case-item-wrap">
                <div class="case-item">
                    <img class="case-item__icon" src="http://netgon.net/artstyles/v-card2/assets/icons/icon-dev.svg" alt="">
                    <h3 class="title title--h3">توسعه وب</h3>
                    <p class="case-item__caption">توسعه با کیفیت بالا سایت ها در سطح حرفه ای.</p>
                </div>
            </div>

            <!-- Case Item -->
            <div class="col-12 col-lg-6 case-item-wrap">
                <div class="case-item">
                    <img class="case-item__icon" src="http://netgon.net/artstyles/v-card2/assets/icons/icon-app.svg" alt="">
                    <h3 class="title title--h3">برنامه های تلفن همراه</h3>
                    <p class="case-item__caption">توسعه حرفه ای برنامه های iOS و Android.</p>
                </div>
            </div>

            <!-- Case Item -->
            <div class="col-12 col-lg-6 case-item-wrap">
                <div class="case-item">
                    <img class="case-item__icon" src="http://netgon.net/artstyles/v-card2/assets/icons/icon-photo.svg" alt="">
                    <h3 class="title title--h3">عکاسی</h3>
                    <p class="case-item__caption">من عکس هایی با کیفیت بالا از هر گروه را در سطح حرفه ای می سازم.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="section">
        <h2 class="title title--h2">مشتریان می گویند</h2>
        <div class="swiper-container js-carousel-review">
            <div class="swiper-wrapper">
                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="../assets/img/avatar-2.jpg" height="100%" width="100%"></image>
                        </g>
                    </svg>
                    <h4 class="title title--h3">دانیل لوئیس</h4>
                    <p class="review-item__caption">فلیشیا برای ایجاد هویت شرکتی استخدام شد. ما از کار انجام شده بسیار راضی بودیم. او تجربه زیادی دارد و نگران نیاز مشتری است.</p>
                </div>

                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="../assets/img/avatar-3.jpg" height="100%" width="100%"></image>
                        </g>
                    </svg>
                    <h4 class="title title--h3">جسیکا میلر</h4>
                    <p class="review-item__caption">فلیشیا برای ایجاد هویت شرکتی استخدام شد. ما از کار انجام شده بسیار راضی بودیم. او تجربه زیادی دارد و نگران نیاز مشتری است.</p>
                </div>

                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="../assets/img/avatar-4.jpg" height="100%" width="100%"></image>
                        </g>
                    </svg>
                    <h4 class="title title--h3">تانیا روزی</h4>
                    <p class="review-item__caption">فلیشیا برای ایجاد هویت شرکتی استخدام شد. ما از کار انجام شده بسیار راضی بودیم. او تجربه زیادی دارد و نگران نیاز مشتری است.</p>
                </div>

                <!-- Item review -->
                <div class="swiper-slide review-item">
                    <svg class="avatar avatar--80" viewBox="0 0 84 84">
                        <g class="avatar__hexagon">
                            <image xlink:href="../assets/img/avatar-5.jpg" height="100%" width="100%"></image>
                        </g>
                    </svg>
                    <h4 class="title title--h3">توماس کاسترو</h4>
                    <p class="review-item__caption">فلیشیا برای ایجاد هویت شرکتی استخدام شد. ما از کار انجام شده بسیار راضی بودیم. او تجربه زیادی دارد و نگران نیاز مشتری است.</p>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Clients -->
    <div class="section">
        <h2 class="title title--h2">مشتری</h2>
        <div class="swiper-container js-carousel-clients">
            <div class="swiper-wrapper">
                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="../assets/img/download.jpg" alt="لوگو"></a>
                </div>

                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="../assets/img/download.jpg" alt="لوگو"></a>
                </div>

                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="../assets/img/download.jpg" alt="لوگو"></a>
                </div>

                <!-- Item client -->
                <div class="swiper-slide">
                    <a href="#"><img src="../assets/img/download.jpg" alt="لوگو"></a>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</div><!-- Content End -->
</div><!-- Wrapper End -->
</main>

<!-- SVG masks -->
<svg class="svg-defs">
<clipPath id="avatar-box">
<path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z"></path>
</clipPath>
<clipPath id="avatar-hexagon">
<path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z"></path>
</clipPath>
</svg>

@endsection
