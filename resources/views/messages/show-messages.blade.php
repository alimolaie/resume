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
            <h1 class="m-0 text-dark">داشبورد سوم</h1>
          </div><!-- /.col -->

          <div class="col-sm-10" dir="rtl">
            <table class="table table-bordered mt-5">
                <thead>
                  <tr>
                    <th scope="col">شماره</th>
                    <th scope="col">نام</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">پیام</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">عملیات</th>
                  </tr>
                </thead>
                <?php
                $p=0;
                ?>
                <tbody>
                    @foreach ($contacts as $contact)


                 <tr>
                    <td>
                     <?php
                        echo $p+=1;
                     ?>
                    </td>
                    <td>
                       {{$contact->fullname}}
                    </td>

                    <td>
                        {{$contact->email}}
                     </td>
                     <td>
                        {{$contact->message}}
                     </td>
                     <?php
                     $date=$contact->created_at;
                     ?>
                     <td>
                         {{\Morilog\Jalali\Jalalian::forge($date)->format('%B %d، %Y')}}
                     </td>
                    <td>
                        <form action="/message/delete/{{$contact->id}}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf


                        <button type="submit" class="btn btn-danger">حذف</button>

                    </td>
                </tr>
                @endforeach
                </tbody>

              </table>
              <br/>
              {{$contacts->links()}}
          </div>
            </div>
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
