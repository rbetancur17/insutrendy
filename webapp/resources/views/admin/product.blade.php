@extends('layouts.admin')
@section('content')



     <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                <form action="{{route('categorycreate')}}" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title">Productos</h4>
                              <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                              <form>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Codigo Producto</label>
                                      <input type="text" name="code" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nombre Producto</label>
                                      <input type="text" name="name" class="form-control">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="bmd-label-floating">Precio Producto</label>
                                            <input type="text" name="price" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label class="bmd-label-floating">Categoría</label>
                                            {{Form::select('id_categorie', \App\Categorie::select(), null,
                                                ['class'=>'form-control form-control-lg','id' =>'id_categorie',
                                                'name'=>'id_categorie', "data-validate" => "required"])}}                                          </div>
                                        </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Descripción</label>
                                      <div class="form-group">
                                        <label class="bmd-label-floating"> </label>
                                        <textarea name="description" class="form-control" rows="5"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                <div class="clearfix"></div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                              </form>
                            </div>
                          </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
