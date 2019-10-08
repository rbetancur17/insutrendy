
@extends('layouts.apph')
@section('content')

    <hr>
    <br>
    <div class="container">
        @foreach ($blogd as $blogx)
        @if($blogx->id % 2 != 0)
            <div class="row">
                <div class="col-12-col-sm-12 col-xl-12">
                <h4 class="alert alert-primary">{{$blogx->title}}</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <img src="{{ asset('img/blog-thumbs/'.($blogx->image)) }}" alt="" class="img-blog">
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-xl-9">
                    <p class="alert alert-primary">Fecha: {{$blogx->fecha}}</p>
                    <div class="alert alert-success" role="alert">
                        <p>{!! html_entity_decode(e($blogx->Introduction)) !!}</p>
                        <a href="{{ route('detailBlog',['id'=>$blogx->id]) }}">Ver más</a>
                    </div>
                </div>
                <hr>
                <br><br>
            </div>     
        @elseif($blogx->id % 2 == 0)
            <div class="row">
                <div class="col-12-col-sm-12 col-xl-12">
                    <h4 class="alert alert-primary">{{$blogx->title}}</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-xl-9">
                    <p class="alert alert-primary">Fecha: {{$blogx->fecha}}</p>
                    <div class="alert alert-success" role="alert">
                        <p>{{$blogx->Introduction}}</p>
                        <a href="{{ route('detailBlog',['id'=>$blogx->id]) }}">Ver más</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <img src="{{ asset('img/blog-thumbs/'.($blogx->image)) }}" alt="" class="img-blog">
                </div>
                <hr>
                <br><br>
            </div>   
        @endif
        
        <br>
        @endforeach
    </div>


@endsection