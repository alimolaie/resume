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
            <form action="{{route('works.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
    <label for="exampleFormControlInput1">عنوان</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="لطفا عنوان را وارد کنید" name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">توضیحات</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descrition"></textarea>
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">موارد</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="items"></textarea>
  </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">جزِيیات</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="لطفا جزِییات رو وارد کنید" name="category_details">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">تاریخ انتشار</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="لطفا تاریخ انشار را وارد کنید" name="release_date">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1"> نام شرکت </label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="لطفا نام شرکت را وارد کنید" name="company_name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">دسته بندی</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
      <option>لطفا دسته را انتخاب نمایید</option>
      @foreach ($categories as $category)
     <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>{{ $category->name }}</option>
     @endforeach
    </select>
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
