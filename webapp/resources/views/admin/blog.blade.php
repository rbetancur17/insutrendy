@extends('layouts.admin')
@section('extra_js')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endsection
@section('content')

<hr>
<br>
<br>   
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-xl-1"></div>
            <div class="col-12 col-sm-12 col-md-10 col-xl-10">
                <div class="card text-center">
                    <div class="card-header card-header-warning">
                        Blog
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Entradas Blog Insutrendy</h5>
                        <form action="{{ route('newpost') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Titulo de la Entrada</label>
                                <input type="text" name="title" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de la Entrada</label>
                                <input type="date" name="dateEntrace" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Introducción de la Entrada</label><br>
                                <textarea name="intro" id="" cols="30" rows="10" class="form-control my-editor"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Contenido de la Entrada</label><br>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control my-editor"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Publicar</label>
                                <select name="publish" id="" class="form-control">
                                    <option value="si">SI</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>
                            <div class="">
                                <div class="">
                                      <label class="bmd-label-floating">Imagen Introducción</label>
                                      <input type="file" name="image" class="form-control">
                                    </div>
                            </div>
                            <br>
                            <div class="">
                                <div class="">
                                    <div class="col-sm-3">
                                        <label class="bmd-label-floating">Imagen 01 Blog</label>  
                                    </div>
                                        <div class="col-sm-8"><input type="file" name="image01" class="form-control">
                                    </div> 

                                    <div class="col-sm-3">
                                            <label class="bmd-label-floating">Imagen 02 Blog</label>  
                                        </div>
                                    <div class="col-sm-8">
                                        <input type="file" name="image02" class="form-control">
                                    </div> 

                                    <div class="col-sm-3">
                                            <label class="bmd-label-floating">Imagen 03 Blog</label>  
                                        </div>
                                    <div class="col-sm-8">
                                        <input type="file" name="image03" class="form-control">
                                    </div> 
                                </div>
                            </div>

                            <div class="form-group">
                                    <button type="submit" class="btn btn-warning btn-sm btn-block">Guardar</button>
                                </div>
                        </form>
                        
                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-1 col-xl-1"></div>
        </div>
    </div>
    <script>
        var editor_config = {
          path_absolute : "/",
          selector: "textarea.my-editor",
          plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
          relative_urls: false,
          file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
      
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
              cmsURL = cmsURL + "&type=Images";
            } else {
              cmsURL = cmsURL + "&type=Files";
            }
      
            tinyMCE.activeEditor.windowManager.open({
              file : cmsURL,
              title : 'Filemanager',
              width : x * 0.8,
              height : y * 0.8,
              resizable : "yes",
              close_previous : "no"
            });
          }
        };
      
        tinymce.init(editor_config);
      </script>
@endsection