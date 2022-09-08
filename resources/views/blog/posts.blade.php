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
                    <th>محتوا</th>
                    <th width="280px">عملیات</th>
                </tr>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td><img src="{{asset('/storage/uploads/'.$blog->image_path)}}" alt="image post" width="70" height="70"></td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ \Str::limit($blog->description, 50) }}</td>
                    <td>
                        <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">ویرایش</a>

                            @csrf
                            @method('DELETE')



                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $blogs->links() !!}
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
