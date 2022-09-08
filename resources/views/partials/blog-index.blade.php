@extends('layouts.master')
@section('content')
<section class="section blog-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <p>من <span>وبلاگ</span></p>
                    <h2>چند مقاله در مورد فعالیت و تجربه من</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)


            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img"><img src="{{asset('/storage/uploads/'.$blog->image_path)}}" alt="blog">

                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">

                            <li><i class="fas fa-share-alt"></i>
                                <p>5 اشتراک</p>
                            </li>
                        </ul>
                        <div class="blog-text">
                            <h4><a href="#">{{$blog->title}}</a></h4>
                        </div>
                        <ul class="blog-link">
                            <li><a class="btn btn-inline" href="{{route('blog.show',$blog->id)}}">خواندن</a></li>
                            <li><i class="fas fa-comments"></i>
                                <p>13 نظر</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-btn"><a class="btn btn-inline" href="blog-list.html"><i class="far fa-eye"></i><span>اطلاعات بیشتر</span></a></div>
            </div>
        </div>
    </div>
</section>
