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
                    <th>تعداد روز</th>
                    <th>توضیحات</th>
                    <th>دسته بندی</th>
                    <th>قیمت</th>
                    <th width="280px">عملیات</th>
                </tr>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{$project->day}}</td>
                    <td>{{ \Str::limit($project->description, 50) }}</td>
                    <td>{{ $project->category->name}}</td>
                    <td>{{ $project->price->prices}}</td>
                    <td>
                        <form action="{{ url('admin/project-order/delete/'.$project->id.'') }}" method="POST">



                            @csrf
                            @method('DELETE')



                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $projects->links() !!}
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
