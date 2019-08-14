

@extends('layouts.apph')
@section('content')
    <br>
    <h2 class="text-center">Productos Destacados</h2>
    <hr class="w-75">
    <div class="container">
        {{-- aca iria el foreach --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton2.jpg') }}" alt="Insutrendy" class="featured-products">
                <span><p>Boton</p></span>
                <button class="btn btn-success">Solicitar Información</button>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton1.jpg') }}" alt="Insutrendy" class="featured-products">
                <span><p>Boton</p></span>
                <button class="btn btn-success">Solicitar Información</button>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton3.jpg') }}" alt="Insutrendy" class="featured-products">
                <span><p>Boton</p></span>
                <button class="btn btn-success">Solicitar Información</button>
            </div>
        </div>
    </div>
    <br>
    <hr>


@endsection