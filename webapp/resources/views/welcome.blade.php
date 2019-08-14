

@extends('layouts.apph')
@section('content')
    <br>
    <h2 class="text-center">Productos Destacados</h2>
    <div class="container">
        {{-- aca iria el foreach --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton2.jpg') }}" alt="Insutrendy" class="img-fluid featured-products">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton1.jpg') }}" alt="Insutrendy" class="img-fluid featured-products">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton1.jpg') }}" alt="Insutrendy" class="img-fluid featured-products">
            </div>
        </div>
    </div>
    <br>
    <hr>


@endsection