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
    .dropzone {
        border: 2px dashed #999999;
        border-radius: 10px;
    }

    .dropzone .dz-default.dz-message {
        height: 171px;
        background-size: 132px 132px;
        margin-top: -101.5px;
        background-position-x: center;


    }

    .dropzone .dz-default.dz-message span {
        display: block;
        margin-top: 145px;
        font-size: 20px;
        text-align: center;
    }
    .content-wrapper {
        background: #ffffff !important;
    }
</style>
@section('content')
    @include('cms.navbar')
    @include('cms.main-sidebar')
    @php
        use Illuminate\Support\Facades\Auth;
    @endphp
    <!--نمایش پیغام-->
    <div class="container">
        <div class="col-sm-12">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12 col-12 ">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="d-inline-block"></h5>
                                    </div>
                                    <div class="card-body colorbod ">
                                        <div class="row">
                                            <i class="fa fa-user icusr d-inline-block"></i>
                                            <p class="txtkarbar ">عنوان :</p>
                                            <p class="mr-2">{{$ticket->tikect->title}}</p>
                                        </div>
                                        <div class="row">
                                            <i class="fa fa-user icusr d-inline-block"></i>
                                            <p class="txtkarbar ">بخش :</p>
                                            <p class="mr-2">{{$ticket->tikect->section}}</p>
                                        </div>
                                        <div class="row">
                                            <i class="fa fa-phone-square indication icusr d-inline-block" style="transform: rotateY(180deg)"></i>
                                            <p class="txtkarbar">اولیت :</p>
                                            <p class="mr-2">{{$ticket->tikect->priority}}</p>
                                        </div>
                                        <div class="row">
                                            <i class="fa fa-envelope-open icusr d-inline-block"></i>
                                            <p class="txtkarbar d-inline-block">نام کاربری :</p>
                                            <p class="mr-2">{{$ticket->member->user_name}}</p>
                                        </div>
                                        <div class="row">
                                            <i class="fa fa-envelope icusr d-inline-block"></i>
                                            <p class="txtkarbar d-inline-block">توضیحات :</p>
                                            <p class="mr-2">{{$ticket->description}}</p>
                                        </div>
                                        <hr class="hrcoleft">
                                        <p class="txtkarbar d-inline-block" style="font-size: 20px">پاسخگویی</p>
                                        <form action="{{url('admin/tikets/post/'.$ticket->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="member_id" value="{{$ticket->member->id}}">
                                            <input type="hidden" name="ticket_id" value="{{$ticket->tikect->id}}">
                                            <input type="hidden" name="user_id" value="{{Auth::guard('web')->id()}}">
                                            <div class="col-12 my-3">
                                                <label class="input-group">توضیحات : </label>
                                                <textarea class="form-control" name="description" style="width: 100%;height: 200px"></textarea>

                                            </div>
                                            <div class="col-12 my-3">
                                                <label class="input-group">ضمیمه : </label>
                                                <div class="needsclick dropzone" style="height: 165px" id="document-dropzone"></div>

                                            </div>
                                            <button class="btn btn-primary btn-block mt-3" type="submit">ارسال پیغام</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/basic.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @toastr_css
    <title>خرید و فروش ماشین</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<script type="text/javascript">
    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
        url: '{{ route('dropzone.images.store') }}',
        maxFilesize: 10, // MB
        addRemoveLinks: false,
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="tiket_files[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function (file) {
            var name = uploadedDocumentMap[file.name];
            var token = $('[name=_token]').val();
            var dir = $('[name=dir]').val();
            console.log(dir);


            $.ajax({
                type: 'post',
                headers: {'X-CSRF-Token': token},
                url: 'dropzone/image/delete',
                data: {name: name, dir: dir},
                dataType: 'html'
            });

            var _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            availableImages = availableImages + 1;
        },
        // init: function () {
        //     @if(isset($project) && $project->document)
        //     var files =
        //             {!! json_encode($project->document) !!}
        //             for (var i in files) {
        //         var file = files[i]
        //         this.options.addedfile.call(this, file)
        //         file.previewElement.classList.add('dz-complete')
        //         $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
        //     }
        //     @endif
        // }
    };

</script>
@toastr_js
@toastr_render
