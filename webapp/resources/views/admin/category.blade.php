@extends('layouts.admin')
@section('content')
    

        
     <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                    <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title">Categorias Producto</h4>
                              <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                              <form>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Codigo Categoria</label>
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nombre Categoria</label>
                                      <input type="text" class="form-control">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Descripción</label>
                                      <div class="form-group">
                                        <label class="bmd-label-floating"> </label>
                                        <textarea class="form-control" rows="5"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                <div class="clearfix"></div>
                              </form>
                            </div>
                          </div>
            </div>
        </div>
    </div>

@endsection