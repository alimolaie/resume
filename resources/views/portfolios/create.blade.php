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
                        <form action="{{route('portfolios.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">عنوان</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان را وارد کنید" name="title">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail8">تاریخ</label>
                                <input class="datepicker form-control" name="date"/>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">توضیحات</label>
                                <textarea class="tinymce-editor" name="description" style=" position: absolute;z-index:-1;"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">ویژگی</label>
                                <textarea class="tinymce-editor" name="feature" style=" position: absolute;z-index:-1;"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="input-group">ضمیمه ها : </label>
                                <div class="needsclick dropzone" style="height: 165px" id="document-dropzone"></div>                            </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">لینک پروژه</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="لطفا عنوان را وارد کنید" name="link">
                                </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">نوع پروژه</label>
                                <select id="inputState" class="form-control" name="project_type">
                                    <option selected>نوع پروژه را انتخاب کنید</option>
                                    <option value="1">لاراول</option>
                                    <option value="2">وردپرس</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">تصویر شاخص</label>
                              <input id="image" type="file" name="image" class="form-control-file"/>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
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
                $('form').append('<input type="hidden" name="programming_tool_image[]" value="' + response.name + '">')
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
    <script type="text/javascript">

        var i = 0;

        $("#add-btn").click(function(){

            ++i;

            $("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+i+'][programming_tool_title]" placeholder="Enter title" class="form-control" /></td><td><input type="file" name="programming_tool_image[]" class="form-control"></td><td><button type="button" class="btn btn-danger remove-tr">حذف</button></td></tr>');
        });

        $(document).on('click', '.remove-tr', function(){
            $(this).parents('tr').remove();
        });

    </script>
    @include('cms.footer')
@endsection
