@extends('layouts.admin')
@section('content')

<br><br>
<hr>
<br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Listado de Productos</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                <div class="table-resposive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Estado</th>
                                <th>Imagen1</th>
                                <th>Imagen2</th>
                                <th>Imagen3</th>
                                <th>Imagen4</th>
                                <th>Activar</th>
                                <th>Desactivar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                            <tr>
                                <td>{{$product->code}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    @switch($product->status)
                                    @case(1)
                                        Activo
                                    @break;
                                    @case(2)
                                        Inactivo
                                    @break;
                                    @endswitch
                                </td>
                                <td><img src="{{ asset('img/product/'.($product->image)) }}" class="w-25" alt=""></td>
                                <td><img src="{{ asset('img/product/'.($product->image2)) }}" class="w-25" alt=""></td>
                                <td><img src="{{ asset('img/product/'.($product->image3)) }}" class="w-25" alt=""></td>
                                <td><img src="{{ asset('img/product/'.($product->image4)) }}" class="w-25" alt=""></td>
                                <td 
                                    class="text-center">
                                        <a href="{{route('productactive',$product->id)}}" 
                                            class="btn btn-info btn-sm center">Activar
                                        </a>
                                </td>    
                                <td 
                                    class="text-center">
                                    <a href="{{route('productinacactive',$product->id)}}"  
                                        class="btn btn-danger btn-sm center">Desactivar
                                    </a>
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection