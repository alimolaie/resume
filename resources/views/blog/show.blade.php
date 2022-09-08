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
    <title>Portlab - Blog Details</title>
    <link rel="icon" href="https://s18.picofile.com/file/8438638026/logo.png">
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
</head>

<body><a class="back2top-btn" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
    <nav class="navbar-part">
        <div class="container">
            <div class="navbar-content"><a class="navbar-logo" href="index.html"><img src="images/logo.png" alt="logo"></a><button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
                <div class="navbar-slide"><a class="navbar-cross" href="#"><i class="fas fa-times"></i></a>
                    <ul class="navbar-list">
                        <li class="navbar-item active"><a class="navbar-link" href="{{url("/")}}">خانه</a></li>


                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="{{url("/blog")}}">بلاگ</a></li>
                        </li>

                        <li class="navbar-item"><a class="navbar-link" href="{{url("project-order")}}">سفارش پروژه</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{url("contact-us")}}">تماس با ما</a></li>
                    </ul>
                    <div class="navbar-btn"><a class="btn btn-inline" href="{{url("contact-us")}}   "><i class="fas fa-code"></i><span>مشاوره</span></a></div>
                </div>
            </div>
        </div>
    </nav>
    <section class="single-banner">
        <div class="single-oly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h1>جزئیات وبلاگ</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                                <li class="breadcrumb-item"><a href="blog-list.html">لیست وبلاگ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">جزئیات وبلاگ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-det-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-det-banner"><img src="{{asset('/storage/uploads/'.$blogs->image_path)}}" alt="blog-details" width="300" height="350">
                        <div class="blog-det-content">
                            <div class="blog-det-title">
                                <h2><a href="#">{{$blogs->title}}</a></h2>
                            </div>

                            </ul>
                        </div>
                    </div>
                    <div class="blog-det-descrip content-fluid">
                        <p>{{$blogs->description}}</p>
                    </div>





                </div>
            </div>
        </div>
    </section>


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
</body>

</html>
