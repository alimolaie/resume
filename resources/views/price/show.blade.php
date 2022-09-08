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
                    <th>نام دسته بندی</th>

                    <th width="280px">عملیات</th>
                </tr>
                @foreach ($prices as $price)
                <tr>
                    <td>{{ $price->id }}</td>

                    <td>{{ $price->prices }}</td>

                    <td>
                        <form action="category/delete/{{$price->id}}" method="POST">



                            @csrf
                            @method('DELETE')



                            <button type="submit" class="btn btn-danger">حذف</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $prices->links() !!}
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
