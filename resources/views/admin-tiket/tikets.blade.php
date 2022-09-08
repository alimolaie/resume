@extends('layouts.app')
<style>
    body {
        direction: rtl;
        text-align: right;
        font-family: 'Vazir', sans-serif;
        overflow-x: hidden;
    }
    .icusr {
        font-size: 22px;
        color: rgb(43, 99, 253);
        margin-left: 8px;
    }
    .content-wrapper {
        background: #ffffff !important;
    }
</style>
@section('content')
    @include('cms.navbar')
    @include('cms.main-sidebar')
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 mt-5">
                <div class="content-wrapper">
                    <section class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="container">
                                        <div class="card">
                                            <div class="card-body table-responsive p-0 btable">
                                                <table class="table table-hover">
                                                    <thead class="hedtable">
                                                    <tr>
                                                        <th>ردیف</th>
                                                        <th>عنوان</th>
                                                        <th>بخش</th>
                                                        <th>اولیت</th>
                                                        <th>نام کاربری</th>
                                                        <th>عملیات</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="myTablek">
                                                    @foreach($tickts as $key=>$ticket)
                                                        <tr>
                                                            <td>{{++$key}}</td>
                                                            <td>{{$ticket->tikect->title}}</td>
                                                            <td>{{$ticket->tikect->section}}</td>
                                                            <td>{{$ticket->tikect->priority}}</td>
                                                            <td>{{$ticket->member->user_name}}</td>
                                                            <td>


                                                                <a href="{{url('admin/tikets/view/'.$ticket->id)}}">
                                                                    <i class="fa fa-eye mr-3"
                                                                       style="font-size:21px;color:rgb(7, 82, 143)"></i>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer">
                                                <ul class="pagination pagination-sm m-0 float-left">
                                                    {{$tickts->links()}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    @include('cms.footer')
@endsection


    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="{{'css/style.css'}}">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

