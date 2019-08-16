@extends('layouts.apph')
@section('content')

<div class="page-top-info">
		<div class="container">
			<h4>Productos</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Productos</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 order-2 order-lg-1">

				</div>


				<div class="col-lg-10  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						@foreach($products as $prod)

							<div class="col-lg-4 col-sm-6">
								<div class="product-item">
									<div class="pi-pic">
										<img src="../img/product/6.jpg" alt="">

									</div>
									<div class="pi-text">
										<h6>{{number_format($prod->price)}}</h6>
										<p>{{$prod->name}}</p>
									</div>
								</div>
							</div>						


						@endforeach

					</div>
				</div>
			</div>
		</div>
    </section>
    
    @endsection