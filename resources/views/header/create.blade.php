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
            <form action="{{url('post-header')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">پیغام خوش آمد گویی</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان را وارد کنید" name="welcome_message">

                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">عنوان</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان را وارد کنید" name="title">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">توضیحات</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">تصویر شاخص</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
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
