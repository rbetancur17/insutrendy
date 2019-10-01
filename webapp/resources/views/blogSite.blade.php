
@extends('layouts.apph')
@section('content')

    <hr>
    <br>
    <div class="container">
        @foreach ($blogs as $blog)
        @if($blog->id % 2 != 0)
            <div class="row">
                <div class="col-12-col-sm-12 col-xl-12">
                <h4 class="alert alert-primary">{{$blog->title}}</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <img src="{{ asset('img/blog-thumbs/'.($blog->image)) }}" alt="" class="img-blog">
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-xl-9">
                    <p class="alert alert-primary">Fecha: {{$blog->fecha}}</p>
                    <div class="alert alert-success" role="alert">
                        <p>{!! html_entity_decode(e($blog->content)) !!}</p>
                        <a href="{{ route('detailBlog',['id'=>$blog->id]) }}">Ver más</a>
                    </div>
                </div>
                <hr>
                <br><br>
            </div>     
        @elseif($blog->id % 2 == 0)
            <div class="row">
                <div class="col-12-col-sm-12 col-xl-12">
                    <h4 class="alert alert-primary">{{$blog->title}}</h4>
                </div>
                <div class="col-12 col-sm-12 col-md-9 col-xl-9">
                    <p class="alert alert-primary">Fecha: {{$blog->fecha}}</p>
                    <div class="alert alert-success" role="alert">
                        <p>{{$blog->introduction}}</p>
                        <a href="{{ route('detailBlog',['id'=>$blog->id]) }}">Ver más</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                    <img src="{{ asset('img/blog-thumbs/'.($blog->image)) }}" alt="" class="img-blog">
                </div>
                <hr>
                <br><br>
            </div>   
        @endif
        
        <br>
        @endforeach
    </div>


@endsection