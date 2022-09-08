@extends('layouts.master')
@section('content')
<section class="section resume-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>رزومه <span>من</span></p>
                    <h2>برخی از اطلاعات اساسی در مورد خودم</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="resume-cate-btn">
                    <li><button class="cate-btn active" onclick="filter('about-part')"><i class="fas fa-user"></i><span>درمورد من</span></button></li>
                    <li><button class="cate-btn" onclick="filter('exper-part')"><i class="fas fa-user-tie"></i><span>تجربه</span></button></li>
                    <li><button class="cate-btn" onclick="filter('edu-part')"><i class="fas fa-user-graduate"></i><span>تحصیلات</span></button></li>

                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section about-part cate-active">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-summery">
                    <h3>رضا صفدری</h3>
                <p>{{$profile->work}}</p>
                </div>
                <div class="about-list">
                    <ul>
                        <li>
                            <h6>روز تولد:</h6>
                            <p>{{$profile->brith_day}}</p>
                        </li>
                        <li>
                            <h6>آدرس:</h6>
                            <p>{{$profile->address}}</p>
                        </li>

                    </ul>
                    <ul>
                        <li>
                            <h6>تلفن:</h6>
                            <p>{{$profile->phone}}</p>
                        </li>
                        <li>
                            <h6>اسکایپ:</h6>
                            <p>-</p>
                        </li>
                        <li>
                            <h6>لینک شده:</h6>
                            <p>-</p>
                        </li>
                    </ul>
                </div>
                <div class="about-btn duel-btn"><a class="btn btn-inline" href="{{asset('/uploads/resume/'.$profile->resume_file)}}" download><i class="fas fa-download"></i><span>بارگیری </span></a><a class="btn btn-inline" href="contact.html"><i class="fas fa-headset"></i><span>با من تماس بگیر</span></a></div>
            </div>
            <div class="col-lg-5">
                <div class="about-img"><img src="{{asset('images/safdari.jpg')}}" alt="about"></div>
            </div>
        </div>
    </div>
</section>
<section class="section exper-part cate-active">
    <div class="container">
        <div class="row">


          @foreach ($experiences as $experience)


            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <div class="resume-content">
                        <div class="resume-icon"><i class="fas fa-award"></i></div>
                        <div class="resume-meta">
                            <h4>{{$experience->post}}</h4>
                            <h5>{{$experience->company_name}}</h5>
                            <h6>{{$experience->experience_date}} </h6>
                        </div>
                    </div>
                    <div class="resume-text">
                        <p> {{$experience->experience_description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="section edu-part cate-active">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <div class="resume-content">
                        <div class="resume-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="resume-meta">
                            <h4>نرم افزار کامپیوتر</h4>
                            <h5>دانشگاه فنی</h5>
                            <h6> مهر 1392 تا الان</h6>
                        </div>
                    </div>
                    <div class="resume-text">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <div class="resume-content">
                        <div class="resume-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="resume-meta">
                            <h4>نرم افزار کامپیوتر</h4>
                            <h5>دانشگاه فنی</h5>
                            <h6> مهر 1392 تا الان</h6>
                        </div>
                    </div>
                    <div class="resume-text">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <div class="resume-content">
                        <div class="resume-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="resume-meta">
                            <h4>نرم افزار کامپیوتر</h4>
                            <h5>دانشگاه فنی</h5>
                            <h6> مهر 1392 تا الان</h6>
                        </div>
                    </div>
                    <div class="resume-text">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="resume-card">
                    <div class="resume-content">
                        <div class="resume-icon"><i class="fas fa-graduation-cap"></i></div>
                        <div class="resume-meta">
                            <h4>نرم افزار کامپیوتر</h4>
                            <h5>دانشگاه فنی</h5>
                            <h6> مهر 1392 تا الان</h6>
                        </div>
                    </div>
                    <div class="resume-text">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section refer-part cate-active">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="refer-card">
                    <div class="refer-img"><img src="images/reference/01.jpg" alt="reference"></div>
                    <div class="refer-content">
                        <h4>لیدی واتسونا</h4>
                        <p>معاون مدیر<span>موسسه ستین کو</span></p>
                        <ul class="refer-contact">
                            <li><a class="icon icon-inline" href="#"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="refer-card">
                    <div class="refer-img"><img src="images/reference/02.jpg" alt="reference"></div>
                    <div class="refer-content">
                        <h4>لیدی واتسونا</h4>
                        <p>معاون مدیر <span>موسسه ستین کو</span></p>
                        <ul class="refer-contact">
                            <li><a class="icon icon-inline" href="#"><i class="fas fa-phone-alt"></i></a></li>
                            <li><a class="icon icon-inline" href="#"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

