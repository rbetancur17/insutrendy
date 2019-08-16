@extends('layouts.apph')
@section('content')

<div class="page-top-info">
		<div class="container">
			<h4>Tus Productos</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Cotizar</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->

	<!-- cart section end -->
    <form action="{{route('sendquotation')}}" method="post" class="contact-form">
    {{ csrf_field() }}			


		<div class="container">

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table">
							<h3>Tus Datos Personales</h3>
									<input type="text" name="nombre" placeholder="Nombre" style="border: solid 0.1em #000;">
									<input type="text" name="email" placeholder="Email" style="border: solid 0.1em #000;">
									<input type="text" name="movil" placeholder="Movil" style="border: solid 0.1em #000;">
						</div>
					</div>
				</div>
				</br>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table">
							<h3>Tus Productos a Cotizar</h3>
							<div class="cart-table-warp">
								<table>
								<thead>
									<tr>
										<th class="product-th">Producto</th>
										<th class="quy-th">Cantidad</th>
									</tr>
								</thead>
								<tbody>
									@foreach($products as $prod)
									<tr>
										<input type="hidden" value="{{$prod->id_product}}" name="id_product">
										<td class="product-col">
											<img src="img/product/boton1.jpg" alt="">
											<div class="pc-title">
												<h4>{{$prod->name}}</h4>
												<p>{{number_format($prod->price)}}</p>
											</div>
										</td>
										<td class="quy-col">
											<div class="quantity">
						                        <div class="pro-qty">
													<input type="text" value="1" name="cantidad">
												</div>
	                    					</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							</div>
						</div>
					</div>
					<div class="col-lg-4 card-right">
						<button type="submit" class="btn btn-warning btn-lg">Enviar Cotización</button>
						<br><br>
						<a href="{{route('home')}}" class="btn btn-dark btn-lg">Continuar Navegando</a>
					</div>
				</div>
		</div>
	</br>
	</form>	
</section>

@endsection