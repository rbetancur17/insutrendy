@extends('layouts.admin')
@section('content')

  <br><br>
  <div class="container">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-xl-12">
              <form action="{{route('update',$product->id)}}" method="post">
                  {{ csrf_field() }}
                  <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Editar Producto</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="card-body">
                            <form>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">ID Producto</label>
                                  <input type="text" name="id_product" 
                                    class="form-control" value="{{$product->id}}">
                                  </div>
                                </div>
                              </div>                              
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Codigo Producto</label>
                                  <input type="text" name="code" class="form-control" value="{{$product->code}}">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Nombre Producto</label>
                                  <input type="text" name="name" class="form-control" value="{{$product->name}}">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Precio Producto</label>
                                        <input type="text" name="price" class="form-control" value="{{$product->price}}">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">SubCategoría Nivel 2:</label>
                                      </div>
                                    </div>
                                    <div class="col-md-4">
                                      <div class="form-group">
                                       <select name="subcategorie_child_id"  class="form-control">
                                             @foreach($subcategoriesChild as $item)
                                                <option 
                                                  value="{{ $item->id }}" 
                                                  {{ ( $item->id == $product->id_subcategorie_child ) ? 'selected' : '' }}> {{ $item->name }} 
                                                </option>
                                            @endforeach 
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
                                      <textarea name="description" class="form-control" rows="5">
                                          {{$product->description}}
                                      </textarea>
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
