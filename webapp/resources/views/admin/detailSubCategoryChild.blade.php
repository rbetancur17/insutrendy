@extends('layouts.admin')
@section('content')



     <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                <form action="{{route('subcategorydetailedit')}}" method="post">
                    {{ csrf_field() }}
                    <div class="card">
                            <div class="card-header card-header-primary">
                              <h4 class="card-title">SubCategorias Nivel 2, Editar</h4>
                              <p class="card-category"></p>
                            </div>
                            <div class="card-body">
                              <form>
                             <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">ID SubCategoria Nivel 2</label>
                                  <input type="text" name="id_subcategorie" 
                                    class="form-control" value="{{$subcategorie->id}}">
                                  </div>
                                </div>
                              </div>                                  
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Codigo SubCategoria Nivel 2</label>
                                    <input type="text" name="code" class="form-control" value="{{$subcategorie->code}}">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label class="bmd-label-floating">Nombre SubCategoria Nivel 2</label>
                                      <input 
                                      type="text" name="name" class="form-control" value="{{$subcategorie->name}}">
                                    </div>
                                  </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">SubCategoría:</label>
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <div class="form-group">
                                       <select name="subcategorie_id"  class="form-control">
                                             @foreach($category as $item)
                                                <option 
                                                  value="{{ $item->id }}" 
                                                  {{ ( $item->id == $subcategorie->id_subcategorie ) ? 'selected' : '' }}> {{ $item->name }} 
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
                                        <textarea name="description" class="form-control" rows="2">
                                                {{$subcategorie->description}}
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
