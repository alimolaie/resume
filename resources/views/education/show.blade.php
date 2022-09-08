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
          <div class="col-md-12 mr-1">
            <a class="btn btn-success" href="{{route('education.create')}}">افزودن  مورد جدید</a>
          </div>
          <div class="col-sm-10 mt-5" dir="rtl">
            <table class="table table-bordered">
                <tr>
                    <th>شماره</th>
                    <th>رشته</th>
                    <th>نام دانشگاه</th>
                    <th>تاریخ</th>
                    <th>توضیحات</th>
                    <th width="280px">عملیات</th>
                </tr>
                @foreach ($educations as $education)
                <tr>
                    <td>{{ $education->id }}</td>

                    <td>{{ $education->feild }}</td>
                    <td>{{ $education->university }}</td>
                    <td>{{ $education->university_date }}</td>
                    <td>{{ $education->education_description }}</td>
                    <td>
                        <form action="{{route('education.destroy',$education->id)}}" method="POST">

                            <a class="btn btn-primary" href="{{route('education.edit',$education->id)}}">ویرایش</a>

                            @csrf
                            @method('DELETE')



                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $educations->links() !!}
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
