<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="setinco">
    <meta name="email" content="setinco@gmail.com">
    <meta name="profile" content="">
    <meta name="name" content="Portlab">
    <meta name="type" content="وب سایت شرکت">
    <meta name="title" content="Portlab - وب سایت شرکت Bootstrap HTML Template">
    <meta name="keywords" content="portlab, portfolio, personal, html, template, bootstrap, bussiness, clean, creative, resume, cv, designer, responsive, minimal, freelancer">
    <title>وبسایت شخصی و ثبت تیکت رضا صفدری</title>
    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="{{asset("fonts/flaticon/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/vendor/slick.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/vendor/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/index.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/blog-list.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/blog-details.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/portfolio-list.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/portfolio-details.css")}}">
    <link rel="stylesheet" href="{{asset("css/custom/contact.css")}}">
    <link rel="stylesheet" href="{{asset('css/msg.css')}}">
    <link rel="stylesheet" href="{{asset("css/custom/blog-details.css")}}">
    @toastr_css

</head>

<body><a class="back2top-btn" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
    @include('fragments.message')
@yield('content')
<!-- JavaScripts -->
<script src="{{asset("js/vendor/jquery-1.12.4.min.js")}}"></script>
    <script src="{{asset("js/vendor/popper.min.js")}}"></script>
    <script src="{{asset("js/vendor/bootstrap.min.js")}}"></script>
    <script src="{{asset("js/vendor/slick.min.js")}}"></script>
    <script src="{{asset("js/custom/slick.js")}}"></script>
    <script src="{{asset("js/vendor/counterup.min.js")}}"></script>
    <script src="{{asset("js/vendor/waypoints.min.js")}}"></script>
    <script src="{{asset("js/custom/counterup.js")}}"></script>
    <script src="{{asset("js/custom/main.js")}}"></script>
    <script src="{{asset("js/common.js")}}"></script>
    <script src="{{asset("js/plugins.min.js")}}"></script>
@toastr_js
@toastr_render
</body>
</html>
