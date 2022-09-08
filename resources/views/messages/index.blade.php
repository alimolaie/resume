@extends('layouts.master')
@section('content')
@include('partials.menu')
<section class="single-banner">
    <div class="single-oly">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h1>تماس با ما</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section contact-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>با من تماس <span>بگیرید</span></p>
                    <h2>من همیشه برای بحث زمان باز باز هستم</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon"><i class="fas fa-phone"></i></div>
                    <div class="address-text">
                        <h4>تلفن</h4>
                        <p>{{$profiles->phone}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon"><i class="fas fa-envelope"></i></div>
                    <div class="address-text">
                        <h4>پست الکترونیک</h4>
                        <p>{{$profiles->email}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="contact-address">
                    <div class="address-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="address-text">
                        <h4>محل</h4>
                        <p>{{$profiles->address}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-7">
                <form action="{{url("post")}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group"><input type="text" class="form-control" placeholder="نام و نام خانوادگی" name="fullName"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group"><input type="email" class="form-control" placeholder="ایمیل" name="email"></div>
                        </div>


                        <div class="col-lg-12">
                            <div class="form-group"><textarea class="form-control" placeholder="پیام" name="message"></textarea></div>
                        </div>
                        <div class="col-md-4">
                            <div class="captcha">
                                <span class="btn-refresh">{!! captcha_img() !!}</span>
                            </div>
                            <br>
                            <input id="captcha" type="text" class="form-control" placeholder="کد امنیتی" name="captcha">

                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <div class="col-lg-12">
                            <br>
                            <div class="form-btn"><button class="btn btn-inline" type="submit"><i class="fas fa-paper-plane"></i><span>ارسال</span></button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="contact-img"><img src="images/banner/contact.png" alt="contact"></div>
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
<script type="text/javascript">


    $(".btn-refresh").click(function(){
        $.ajax({
            type:'GET',
            url:'/refresh_captcha',
            success:function(data){
                $(".captcha span").html(data.captcha);
            }
        });
    });


</script>
@endsection
