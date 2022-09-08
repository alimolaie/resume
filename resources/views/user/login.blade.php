@extends('layouts.master')
@section('content')
    @include('partials.menu')
    @php
        use Illuminate\Support\Facades\Auth;
    @endphp
    <section class="single-banner">
        <div class="single-oly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h1>ورود</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ورود</li>
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
                <div class="col-md-6 col-lg-7">
                    @if(Auth::guard('member')->check()==false)
                        <form action="{{route('member.login')}}" method="POST">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="row">

                                <div class="col-lg-6">
                                    <label>نام کاربری</label>
                                    <div class="form-group"><input type="text" class="form-control" placeholder="نام کاربری" name="user_name"></div>
                                </div>
                                <div class="col-lg-6">
                                    <label>رمز عبور</label>
                                    <div class="form-group"><input type="password" class="form-control" placeholder="رمز عبور" name="password"></div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-btn"><button class="btn btn-inline" type="submit"><i class="fas fa-paper-plane"></i><span>ارسال</span></button></div>
                                </div>
                            </div>
                        </form>
                    @else
                        <h3>شما وارد شده اید</h3>
                    @endif

                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="contact-img"><img src="https://carinoshop.com/wp-content/uploads/2020/10/website.png" alt="contact"></div>
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
