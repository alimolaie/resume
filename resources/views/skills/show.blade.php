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
                    <th width="280px">عملیات</th>
                </tr>
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->id }}</td>

                    <td>{{ $skill->title }}</td>
                    <td><img src="{{asset('uploads/'.$skill->image)}}" alt="image post" width="70" height="70"></td>
                    <td>
                        <form action="{{ route('skills.destroy',$skill->id) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('skills.edit',$skill->id) }}">ویرایش</a>

                            @csrf
                            @method('DELETE')



                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $skills->links() !!}
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
