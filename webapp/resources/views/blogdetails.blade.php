
@extends('layouts.apph')
@section('content')

<hr>
<br>

<div class="container">
    
    <div class="row">
    <div class="col-12 col-md-12 col-xl-12">
        <h4 class="text-center p-1"><strong>{{ $blogd->fecha }}</strong></h4> </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-xl-12">
        <h4 class="bg-warning text-center text-white p-2">{{ $blogd->title }}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-xl-12">
            <p>
                    {!! html_entity_decode(e($blogd->Introduction)) !!}
            </p>
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-xl-2"></div>
        <div class="col-12 col-sm-12 col-md-4 col-xl-4">
            <img src="{{ asset('img/blog-thumbs/'.($blogd->image01)) }}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-xl-4">
            <img src="{{ asset('img/blog-thumbs/'.($blogd->image02)) }}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-2 col-xl-2"></div>
    </div>
    <br>
    <hr class="bg-warning" style="height:18px;">

    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-xl-4">
            <img src="{{ asset('img/blog-thumbs/'.($blogd->image03)) }}" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-xl-8">
                {!! html_entity_decode(e($blogd->content)) !!}
        </div>
        
    </div>
    <br>
</div>





@endsection