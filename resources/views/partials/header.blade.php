@extends('layouts.master')
@section('content')

<section class="banner-part">
    <div class="banner-bg">
        <div class="container"><img class="circle-shape" src="images/assets/circle.png" alt="circle"><img class="star-shape" src="images/assets/star.png" alt="star">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-img"><img src="{{asset('/storage/uploads/'.$headers->image)}}" alt="hero"></div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-content">
                        <ul class="banner-icon">
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                        <div class="banner-text"><span>{{$headers->welcome_message}}</span>
                            <h1>{{$headers->title}}</h1>
                            <p>{{$headers->description}}</p>
                        </div>
                        <div class="banner-btn duel-btn"><a class="btn btn-inline" href="resume.html"><i class="fas fa-arrows-alt"></i><span>مشاهده نمونه کار</span></a><a class="btn btn-inline" href="{{url("project-order")}}"><i class="fas fa-boxes"></i><span>سفارش پروژه</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
