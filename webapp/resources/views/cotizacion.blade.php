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
	<section class="cart-section spad">
			<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="cart-table">
								<h3>Tus Datos Personales</h3>
								<form class="contact-form">
										<input type="text" name="" placeholder="Nombre" style="border: solid 0.1em #000;">
										<input type="text" name="" placeholder="Email" style="border: solid 0.1em #000;">
										<input type="text" name="" placeholder="Movil" style="border: solid 0.1em #000;">
										
								</form>
							</div>
						</div>
					</div>
				</div>
				<br>
		<div class="container">
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
									<th class="size-th">Tamaño</th>
									<th class="total-th">Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-col">
										<img src="img/product/boton1.jpg" alt="">
										<div class="pc-title">
											<h4>Botón 1</h4>
											<p>$00.00</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$00.00</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="img/product/boton2.jpg" alt="">
										<div class="pc-title">
											<h4>Botón 2</h4>
											<p>$00.00</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$00.00</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="img/product/boton3.jpg" alt="">
										<div class="pc-title">
											<h4>Botón 3</h4>
											<p>$00.00</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$00.00</h4></td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>$00.90</span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<a href="" class="btn btn-warning btn-lg">Enviar Cotización &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					<br><br>
					<a href="" class="btn btn-dark btn-lg">Continuar Navegando</a>
				</div>
			</div>
		</div>
	</section>

@endsection