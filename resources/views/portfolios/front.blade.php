@extends('layouts.master')
@section('content')
    @include('partials.menu')
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
    <section class="feature-part">
        <div class="container">
            <div class="feature-slider">
                <div class="feature-card"><i class="flaticon-creativity"></i>
                    <h6>کاملا ریسپانسیو</h6>
                </div>
                <div class="feature-card"><i class="flaticon-tools-and-utensils"></i>
                    <h6>سئو دوستانه</h6>
                </div>
                <div class="feature-card"><i class="flaticon-credit-card"></i>
                    <h6>کد تمیز</h6>
                </div>
                <div class="feature-card"><i class="flaticon-devices"></i>
                    <h6>آسان سفارشی سازی</h6>
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
                        <p>می توانید جستجوی پرش سریع را انجام دهید و همچنین دسته را کلیک کنید</p>
                    </div>
                </div>
            </div>
            <div class="row port-parent" id="post">
                @foreach($portfolios as $laravel)
                <div class="col-sm-6 col-lg-4 mix">

                    <div class="port-card">
                        <div class="port-img"><img src="{{asset('uploads/portfiolos/'.$laravel->image)}}" alt="portfolio" width="350" height="250"></div>
                        <div class="port-oly">
                            <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                            <div class="port-text">
                                <h6>{{$laravel->title}}</h6>
                            </div>
                        </div>
                    </div>

                </div >
                @endforeach
            </div>
            <div class="text-center m-3">
                <button class="btn" id="load-more" data-paginate="2" style="background-color:#d8532b;color:#ffffff"><span style="color:#ffffff">مشاهده بیشتر</span></button>
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
        var paginate = 1;
        loadMoreData(paginate);

        $('#load-more').click(function() {
            var page = $(this).data('paginate');
            loadMoreData(page);
            $(this).data('paginate', page+1);
        });
        // run function when user click load more button
        function loadMoreData(paginate) {
            $.ajax({
                url: '?page=' + paginate,
                type: 'get',
                datatype: 'html',
                beforeSend: function() {
                    $('#load-more').text('مشاهده بیشتر');
                }
            })
                .done(function(data) {
                    if(data.length == 0) {
                        $('.invisible').removeClass('invisible');
                        $('#load-more').hide();
                        return;
                    } else {
                        $('#load-more').text('مشاهده بیشتر');
                        $('#post').append(data);
                    }
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('Something went wrong.');
                });
        }
    </script>
@endsection
