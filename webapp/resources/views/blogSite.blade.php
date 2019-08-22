
@extends('layouts.apph')
@section('content')

    <hr>
    <br>
    <div class="container">
        @foreach ($blogs as $blog)
        <div class="row">
            <div class="col-12-col-sm-12 col-xl-12">
            <h3 class="alert alert-primary">{{$blog->title}}</h3>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/blog-thumbs/'.($blog->image)) }}" alt="" class="img-thumbail">
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-xl-8">
                <p class="alert alert-primary">Fecha: {{$blog->fecha}}</p>
                <div class="alert alert-success" role="alert">
                    <p>{{$blog->content}}</p>
                </div>
                
            </div>
        </div>
        <br>
        @endforeach
    </div>


@endsection