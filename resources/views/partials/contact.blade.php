@extends('layouts.master')
@section('content')
@include('partials.preloader')
<main class="main">
	<!-- Menu -->
	@include('partials.menu')

	<div class="wrapper">

		<!-- Sidebar -->
        @include('partials.sidebar')
     
<div class="content js-scroll">
    <div class="section mt-0">
        <h1 class="title title--h1 title__separate">تماس با من</h1>
    </div>
    <br>
    <h2 class="title title--h2">فرم تماس</h2>

    <form  class="contact-form"  method="POST" action="{{url('post')}}">
        @csrf
        <div class="row">
            <div class="form-group col-12 col-md-6">
                <i class="font-icon icon-user"></i>
                <input type="text" class="input input__icon form-control"  name="fullName" placeholder="نام و نام خانوادگی" required="required">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-12 col-md-6">
                <i class="font-icon icon-at"></i>
                <input type="email" class="input input__icon form-control" id="emailContact" name="email" placeholder="آدرس ایمیل" required="required" >
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-12 col-md-12">
                <textarea class="textarea form-control"  name="message" placeholder="پیغام تو" rows="4" required="required" ></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
                <div id="validator-contact" class="hidden"></div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2 text-right">
                <button type="submit" class="btn"><i class="font-icon icon-send"></i> پیام فرستادن</button>
            </div>
        </div>
    </form>
</div><!-- Content End -->
</div><!-- Wrapper End -->
</main>

