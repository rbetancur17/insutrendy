@extends('layouts.admin')
@section('content')



     <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                <form action="{{route('subcategoriecreate')}}" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title">SubCategorias Nivel 1</h4>
                              <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                              <form>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Codigo SubCategoria</label>
                                      <input type="text" name="code" class="form-control">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nombre SubCategoria</label>
                                      <input type="text" name="name" class="form-control">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Categoría:</label>
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form-group">
                                       <select name="categorie_id"  class="form-control">
                                            @foreach($categories as $category)
                                              <option value="{{ $category->id }}">{{$category->name}}</option>
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
                                        <textarea name="description" class="form-control" rows="2"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                <a href="{{ route('listsubCategorie') }}" class="btn btn-warning">Listado de SubCategorias</a>
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
