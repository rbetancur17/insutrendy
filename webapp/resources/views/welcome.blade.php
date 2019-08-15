

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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
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
        {{-- aca iria el foreach --}}
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-xl-4">
                <img src="{{ asset('img/product/boton2.jpg') }}" alt="Insutrendy" class="featured-products">
                <span><p>Boton</p></span>
                <a href="{{ route('productDetail') }}" class="btn btn-success">Solicitar Información</a>
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