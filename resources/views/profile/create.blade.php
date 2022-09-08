@extends('layouts.app')
@section('content')
@include('cms.navbar')
@include('cms.main-sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div><!-- /.col -->

          <div class="col-sm-10" dir="rtl">
            <form action="{{url("post-profile")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">نام و نام خانوادگی</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا نام و نام خانوادگی خود  را وارد کنید" name="full_name">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">شغل</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان را شغل خود وارد کنید" name="work">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">facebook id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان را شناسه فیس بوک خود را وارد کنید" name="facebook">
                </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">twiter id</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا شناسه توییتر را وارد کنید" name="twitter">
                    </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">instagram id</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا شناسه اینستاگرام را وارد کنید" name="instagram">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">linkedin id</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا شناسه  لینکد این را وارد کنید" name="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> تاریخ تولد</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا تاریخ تولد خود را وارد کنید" name="brith_day">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">آدرس</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا آدرس خود را وارد کنید" name="address">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">ایمیل</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا ایمیل را وارد کنید" name="email">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">تلفن</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا تلفن را وارد کنید" name="phone">
                        </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">عکس پروفایل</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profile_image">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">فایل رزومه</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="resume_file">
                  </div>
                <button type="submit" class="btn btn-primary">ارسال</button>
              </form>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('cms.footer')
@endsection
