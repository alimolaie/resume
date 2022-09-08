@extends('layouts.master')
@section('content')
@include('partials.menu')
<section class="single-banner">
    <div class="single-oly">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h1>سفارش پروژه</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a></li>
                            <li class="breadcrumb-item active" aria-current="page">سفارش پروژه</li>
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
                <form action="{{url("post-project")}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="exampleFormControlSelect1">عنوان</label>
                            <div class="form-group"><input type="text" class="form-control" placeholder="عنوان پروژه" name="title"></div>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleFormControlSelect1">زمان پیشنهادی  برای تحویل پروژه چقدر است</label>
                            <div class="form-group"><input type="text" class="form-control" placeholder="تعداد روز" name="day"></div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                           <label for="exampleFormControlSelect1">قیمت مورد نظر برای پروژه</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="price_id">
                             <option>قیمت مورد نظر را انتخاب کنید</option>
                             @foreach ($prices as $price)
                             <option value="{{ $price->id }}" {{ $price->id === old('price_id') ? 'selected' : '' }}>{{ $price->prices }}</option>
                             @endforeach
                     </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                           <label for="exampleFormControlSelect1">دسته بندی پروژه</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                             <option>دسته مورد نظر را انتخاب کنید</option>
                             @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
                          @endforeach

                     </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="exampleFormControlSelect1">بیشتر درباره پروژه بگویید</label>
                            <div class="form-group"><textarea class="form-control" placeholder="کمی در مورد پروژه خود توضیح دهید و خروجی پروژه رو شرح دهید" name="description"></textarea></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-btn"><button class="btn btn-inline" type="submit"><i class="fas fa-paper-plane"></i><span>ارسال</span></button></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="contact-img"><img src="images/banner/programming-banner.png" alt="contact"></div>
            </div>
        </div>
    </div>
</section>

        @include('partials.footer')
    </div>
</section>
@endsection
