
@extends('layouts.apph')
@section('content')


	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d56054177aa790be32f1e4a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


<div class="page-top-info">
		<div class="container">
			<h4>Detalle de Producto</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Productos</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="{{ route('home') }}"> &lt;&lt; Volver a la Categoria</a>
			</div>
			<div class="row">
				@foreach($products as $prod)
					<div class="col-lg-6">
						<div class="product-pic-zoom">
							<img class="product-big-img" src="../img/product/boton1.jpg" alt="">
						</div>
						<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
							<div class="product-thumbs-track">
								<div class="pt active" data-imgbigurl="../img/product/boton1.jpg"><img src="../img/product/boton1.jpg" alt=""></div>
								<div class="pt" data-imgbigurl="../img/product/boton1.jpg"><img src="../img/product/boton1.jpg" alt=""></div>
								<div class="pt" data-imgbigurl="../img/product/boton2.jpg"><img src="../img/product/boton2.jpg" alt=""></div>
								<div class="pt" data-imgbigurl="../img/product/boton3.jpg"><img src="../img/product/boton3.jpg" alt=""></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 product-details">
						<h2 class="p-title">{{$prod->name}}</h2>
						<h3 class="p-price">{{number_format($prod->price)}}</h3>
						<a href="{{route('quotation',[$prod->id_product])}}" class="btn btn-warning btn-lg">Cotizar</a>
						<div id="accordion" class="accordion-area">
							<div class="panel">
								<div class="panel-header" id="headingOne">
									<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">informacion</button>
								</div>
								<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="panel-body">
										<p>Código de Producto: {{$prod->code}}<p>
										<p>Descripción:</p>
										<p>{{$prod->description}}</p>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-header" id="headingThree">
									<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Envios & Devoluciones</button>
								</div>
								<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
									<div class="panel-body">
										<h4>7 Days Returns</h4>
										<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="social-sharing">
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""><i class="fa fa-twitter"></i></a>
							<a href=""><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>


@endsection