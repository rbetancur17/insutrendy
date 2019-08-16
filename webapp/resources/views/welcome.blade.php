

@extends('layouts.apph')
@section('content')
<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>

						</div>
					</div>

				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
		
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
    <section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Inspección en Envios</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Asesoria de Compra</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Logistica de Transporte</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
    <br>
    <h2 class="text-center">Productos Destacados</h2>
    <hr class="w-75">
    <div class="container">
        <div class="row">
            @foreach($products as $prod)
            <div class="col-12 col-sm-12 col-md-3 col-xl-3">
                <img src="{{ asset('img/product/boton2.jpg') }}" alt="Insutrendy" class="featured-products">
                <span><p>{{$prod->code}}
                    <br>{{$prod->name}}</p></span>
                <a href="{{ route('productDetail') }}" class="btn btn-warning">Solicitar Información</a>
            </div>
             @endforeach
        </div>
    </div>
    <br>
    <hr>
{{-- 
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                    <div class="span4">
                            <div class="box flyLeft">
                              <div class="icon">
                                <i class="ico icon-circled icon-bgdark icon-star icon-3x"></i>
                              </div>
                              <div class="text">
                                <h4>Alta <strong>Calidad</strong></h4>
                                <p>
                                  Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                                </p>
                                <a href="">Leer Más</a>
                              </div>
                            </div>
                    </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">

            </div>
        </div>
    </div> --}}


@endsection