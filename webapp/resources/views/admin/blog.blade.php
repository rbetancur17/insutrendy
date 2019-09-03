@extends('layouts.admin')
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
                                <label for="">Contenido de la Entrada</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="">
                                <div class="">
                                      <label class="bmd-label-floating">Imagen 1</label>
                                      <input type="file" name="image" class="form-control">
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

@endsection