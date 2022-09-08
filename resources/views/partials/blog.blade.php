@extends('layouts.master')
@section('content')
@include('partials.menu')
<section class="single-banner">
    <div class="single-oly">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h1>لیست وبلاگ</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">لیست وبلاگ</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-list-part">

    <div class="container">



        <div class="row">

            <div class="col-md-12 col-lg-8">

                <div class="row">
                    @foreach ($blogs as $blog )
                    <div class="col-md-6 col-lg-6">
                        <div class="blog-card">
                            <div class="blog-img"><img src="{{asset('/storage/uploads/'.$blog->image_path)}}" alt="blog-1">

                            </div>
                            <div class="blog-content">

                                <div class="blog-text">
                                    <h4><a href="#">{{$blog->title}}</a></h4>
                                </div>
                                <ul class="blog-link">
                                    <li><a class="btn btn-inline" href="{{route('blog.show',$blog->id)}}">خواندن</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination">
                            {!! $blogs->links() !!}
                        </ul>
                    </div>
                </div>


                </div>
                <div class="col-lg-4">
                    <div class="row">

                        <div class="col-md-7 col-lg-12">
                            <div class="blog-filter">
                                <h4>پست محبوب</h4>
                                @foreach ( $blogRandom as $random )


                                <div class="blog-suggest">
                                    <div class="suggest-img"><a href="#"><img src="{{asset('/storage/uploads/'.$random->image_path)}}" alt="suggest-1"></a></div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h6><a href="{{route('blog.show',$random->id)}}">{{$random->title}}</a></h6>
                                        </div>
                                        <div class="suggest-date"><i class="fas fa-clock"></i>
                                            <p>2 فروردین 1400</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="blog-filter">
                                <h4>ما را دنبال کنید</h4>
                                <ul class="blog-icon">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>



    </div>
</section>
<section class="section footer-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-logo"><a href="#"><img src="images/logo.png" alt="footer-logo"></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="footer-icon">
                    <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="icon icon-inline" href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="footer-text">
                    <li>
                        <h6>&copy; کپی رایت - <span>1400</span></h6>
                    </li>
                    <li>
                        <h6>توسعه یافته توسط - <a target="_blank" href="">setinco</a></h6>
                    </li>
                    <li>
                        <h6>کلیه حقوق محفوظ است - <a target="_blank" href="">setinco</a></h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
