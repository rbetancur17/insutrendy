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
                  <h4 class="card-title ">Listado de Categorias</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                <div class="table-resposive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th colspan="3" class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorie as $categories)
                            <tr>
                                <td>{{$categories->code}}</td>
                                <td>{{$categories->description}}</td>
                                <td>{{$categories->name}}</td>
                                <td>
                                    @switch($categories->status)
                                    @case(1)
                                        Activo
                                    @break;
                                    @case(2)
                                        Inactivo
                                    @break;
                                    @endswitch
                                </td>
                                <td 
                                    class="text-center"><a href="" class="btn btn-info btn-sm center">Activar</a>
                                </td>    
                                <td 
                                    class="text-center"><a href="" class="btn btn-danger btn-sm center">Desactivar</a>
                                </td>                                
                                <td class="text-center">
                                    <a href="{{route('categoryshow',$categories->id)}}"
                                        class="btn btn-info btn-sm center">Editar</a>
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