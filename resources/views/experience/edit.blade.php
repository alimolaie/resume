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
            <form action="{{route('experience.update',$experiences->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="exampleInputEmail1">سمت</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا سمت خود را وارد کنید" name="post" value="{{$experiences->post}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">نام شرکت</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا نام شرکت را وارد کنید" name="company_name" value="{{$experiences->company_name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاریخ</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا تاریخ را وارد کنید" name="experience_date" value="{{$experiences->experience_date}}">
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">توضیحات</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" name="experience_description">{{$experiences->experience_description}}</textarea>
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
