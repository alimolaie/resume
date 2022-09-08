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
            <table class="table table-bordered">
                <tr>
                    <th>شماره</th>
                    <th>عنوان</th>
                    <th>تصویر</th>
                    <th>توضیحات</th>
                    <th>موارد</th>
                    <th>جزِيیات</th>
                    <th>تاریخ انتشار</th>
                    <th>نام شرکت</th>
                    <th>نام دسته</th>
                    <th width="280px">عملیات</th>
                </tr>
                @foreach ($works as $work)
                <tr>
                    <td>{{ $work->id }}</td>
                    <td><img src="{{asset('/storage/uploads/'.$work->image)}}" alt="image post" width="70" height="70"></td>
                    <td>{{ $work->title }}</td>
                    <td>{{ \Str::limit($work->descrition, 50) }}</td>
                    <td>{{ \Str::limit($work->items, 50) }}</td>
                    <td>{{ $work->category_details }}</td>
                    <td>{{ $work->release_date }}</td>
                    <td>{{ $work->company_name }}</td>
                    <td>{{ $work->category->name }}</td>
                    <td>
                        <form action="{{ route('work.destroy',$work->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('work.edit',$work->id) }}">ویرایش</a>

                            @csrf
                            @method('DELETE')



                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $works->links() !!}
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
