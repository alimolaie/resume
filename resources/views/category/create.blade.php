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
            <form action="{{url("post-category")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">نام دسته بندی</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان دسته را وارد کنید" name="name">
                  <small id="emailHelp" class="form-text text-muted">دسته بندی برای نمونه کار ها</small>
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
