@extends('layouts.admin')
@section('content')

<br><br>
<hr>
<br>
<h3 class="pl-2 ml-2">Listado de Productos</h3>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
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
                                <th>Editar</th>
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
                                <td>{{$product->status}}</td>
                                <td><img src="{{ asset('img/product/'.($product->image)) }}" class="w-25" alt=""></td>
                                <td><img src="{{ asset('img/product/'.($product->image2)) }}" class="w-25" alt=""></td>
                                <td><img src="{{ asset('img/product/'.($product->image3)) }}" class="w-25" alt=""></td>
                                <td><img src="{{ asset('img/product/'.($product->image4)) }}" class="w-25" alt=""></td>
                                <td><a href="{{ route('editar', ['id'=>$product->id_product]) }}" class="btn btn-success btn-sm">Editar</a></td>
                                <td><a href="" class="btn btn-danger btn-sm">Desactivar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection