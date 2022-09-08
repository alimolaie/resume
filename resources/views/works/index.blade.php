@extends('layouts.master')
@section('content')

<section class="single-banner">
    <div class="single-oly">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h1>نمونه کارها</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">لیست نمونه کارها</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="port-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="port-heading">
                    <h2>بهترین کارهای من را ببینید</h2>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul class="port-menu">
                    <li><button class="menu active" type="button" data-filter="all">همه پروژه</button></li>
                    <li><button class="menu" type="button" data-filter=".html">html</button></li>
                    <li><button class="menu" type="button" data-filter=".sass">sass</button></li>
                    <li><button class="menu" type="button" data-filter=".react">ریکت</button></li>
                    <li><button class="menu" type="button" data-filter=".word">وردپرس</button></li>
                    <li><button class="menu" type="button" data-filter=".soft">نرم افزار</button></li>
                    <li><button class="menu" type="button" data-filter=".plugin">پلاگین</button></li>
                </ul>
            </div>
        </div>
        <div class="row port-parent">
            <div class="col-sm-6 col-lg-4 mix html">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/01.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix sass">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/02.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix react">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/03.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix word">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/04.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix soft">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/05.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix plugin">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/06.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix html">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/07.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix sass">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/08.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix react">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/09.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix word">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/10.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix soft">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/01.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix plugin">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/02.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix html">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/13.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix sass">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/14.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix react">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/15.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix soft">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/16.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix plugin">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/17.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mix word">
                <div class="port-card">
                    <div class="port-img"><img src="images/portfolio/18.jpg" alt="portfolio"></div>
                    <div class="port-oly">
                        <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                        <div class="port-text">
                            <h6>وب سایت شرکت</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">...</li>
                    <li class="page-item"><a class="page-link" href="#">67</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                </ul>
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
