@extends("layouts.email")

@section("content")
<div class="box">


	<h2>¡Felicidades, tienes una cotización!</h2>

	<div>
		<p><strong>Hola, </strong></p> 
	</div>

	<div>
		<p>
			Tienes una cotización, con el siguiente detalle:
		</p> 
	</div>	

	<br>
	<div>
		@foreach($product as $prod)	
			<div><strong>Producto:</strong>  		  {{$prod->name}}</div>
			<div><strong>Código:</strong>  		  	  {{$prod->code}}</div>
			<div><strong>Precio:</strong>  		      {{$prod->price}}</div>
			<div><strong>Cantidad:</strong>		      {{$cantidad}}</div>
		@endforeach	

		<br>
		
		<div>
			<p>
				Información del cliente:
			</p> 
		</div>	

		<div><strong>Nombre de Cliente:</strong>  {{$nombreCliente}}</div>
		<div><strong>Correo Cliente:</strong> 	  {{$emailCliente}}</div>
		<div><strong>Celular Cliente:</strong>	  {{$movilCliente}}</div>	



		<br>

		<p>	
			<strong>¡Te deseamos éxitos!</strong>
		</p>
	</div>	

	
</div>


	
@endsection