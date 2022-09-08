@extends('layouts.master')
@section('content')
    @php
        use Illuminate\Support\Facades\Auth;
    @endphp
<nav class="navbar-part">
    <div class="container">
        <div class="navbar-content"><a class="navbar-logo" href="index.html"><img src="images/logo.png" alt="logo"></a><button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
            <div class="navbar-slide"><a class="navbar-cross" href="#"><i class="fas fa-times"></i></a>
                <ul class="navbar-list">
                    <li class="navbar-item active"><a class="navbar-link" href="{{url("/")}}">خانه</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="{{url("/blog")}}">بلاگ</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="{{url("project-order")}}">سفارش پروژه</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="{{url("portfolios")}}">نمونه کار</a></li>
                    <li class="navbar-item"><a class="navbar-link" href="{{url("contact-us")}}">تماس با ما</a></li>
{{--                    @if(Auth::guard('member')->check()==false)--}}
{{--                        <li class="navbar-item"><a class="navbar-link" href="{{url('member/login')}}">ورود</a></li>--}}
{{--                    @endif--}}
{{--                    @if(Auth::guard('member')->check()==false)--}}
{{--                        <li class="navbar-item"><a class="navbar-link" href="{{url('member/register')}}">ثبت نام</a></li>--}}
{{--                    @endif--}}
{{--                    @if(Auth::guard('member')->check())--}}
{{--                    <li class="navbar-item"><a class="navbar-link" href="{{url('user/dashboard')}}">حساب کابری من</a></li>--}}
{{--                    @endif--}}
{{--                    @if(Auth::guard('member')->check())--}}
{{--                        <form method="post" action="{{route('member.logout')}}">--}}
{{--                            @csrf--}}
{{--                            <li class="navbar-item">خروج</li>--}}
{{--                        </form>--}}

{{--                    @endif--}}
                </ul>
                <div class="navbar-btn"><a class="btn btn-inline" href="{{url("contact-us")}}   "><i class="fas fa-code"></i><span>مشاوره</span></a></div>
            </div>
        </div>
    </div>
</nav>


