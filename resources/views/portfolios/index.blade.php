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
                                <th>تصویر</th>
                                <th>عنوان</th>
                                <th>تاریخ</th>
                                <th>نوع پروژه</th>
                                <th width="280px">عملیات</th>
                            </tr>

                            @foreach ($portfolios as $key=>$portfolio)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td><img src="{{asset('uploads/portfiolos/'.$portfolio->image)}}" alt="image post" width="70" height="70"></td>
                                    <td>{{ $portfolio->title }}</td>
                                    @php
                                    $date=$portfolio->date;
                                    @endphp
                                    <td>{{  \Morilog\Jalali\Jalalian::forge($date)->format('%A, %d %B %y') }}</td>
                                    <td>
                                        <?php
                                        if ($portfolio->project_type==1)
                                            echo "لاراول";
                                        elseif ($portfolio->project_type==2)
                                            echo "وردپرس";
                                        ?>
                                    </td>
                                    <td>
                                        <form action="{{ route('portfolios.destroy',$portfolio->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')



                                            <button type="submit" class="btn btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $portfolios->links() !!}
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
