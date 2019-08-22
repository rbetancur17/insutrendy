@extends('layouts.admin')
@section('content')



     <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                <form action="" method="post" enctype="multipart/form-data">
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
                                    <input type="text" name="code" class="form-control" value="">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nombre Producto</label>
                                    <input type="text" name="name" class="form-control" value="">
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
                                        <div class="col-md-2">
                                          <div class="form-group">
                                            <label class="bmd-label-floating">Categoría:</label>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                           <select name="subcategorie_id"  class="form-control">
                                               {{--  @foreach($subcategories as $category)
                                                  <option value="{{ $category->id_subcategorie }}">{{$category->name}}</option>
                                                @endforeach  --}}
                                            </select>                                            
                                          </div>
                                        </div>                                        
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label>Descripción</label>
                                      <div class="form-group">
                                        <label class="bmd-label-floating"> </label>
                                        <textarea name="description" class="form-control" rows="2"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="">
                                      <label class="bmd-label-floating">Imagen 1</label>
                                      <input type="file" name="image1" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="">
                                        <label class="bmd-label-floating">Imagen 2</label>
                                        <input type="file" name="image2" class="form-control">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="">
                                      <label class="bmd-label-floating">Imagen 1</label>
                                      <input type="file" name="image3" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="">
                                        <label class="bmd-label-floating">Imagen 2</label>
                                        <input type="file" name="image4" class="form-control">
                                    </div>
                                  </div>
                                </div>                                

                                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                <a href="{{ route('lista') }}" class="btn btn-info">Listado de Productos</a>
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
