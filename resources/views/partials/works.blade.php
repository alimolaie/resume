@extends('layouts.master')
@section('content')
<section class="section port-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>من <span>نمونه کار</span></p>
                    <h2>به برخی از پروژه های برجسته من نگاهی بیندازید</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">


                @foreach ($works as $work)
                <div class="port-slider">

                    <div class="port-card">

                        <div class="port-img"><img src="{{url('/storage/uploads/'.$work->image)}}"   alt=""></div>
                        <div class="port-oly">
                            <div class="port-btn"><a class="btn btn-inline" href="#">پیش نمایش زنده</a><a class="btn btn-inline" href="#">دیدن جزئیات</a></div>
                            <div class="port-text">
                                <h6>{{$work->title}}</h6>
                            </div>
                        </div>

                    </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="port-show-btn"><a class="btn btn-inline" href="portfolio-list.html"><i class="far fa-eye"></i><span>اطلاعات بیشتر</span></a></div>
            </div>
        </div>
    </div>
</section>
