<!DOCTYPE html>
<html lang="es">
<head>
	<title>Insutrendy</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Insutrendy | eCommerce">
	<meta name="keywords" content="Insutrendy, eCommerce, creative, Moda">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/logoFinale.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/animate2.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link href=" {{ asset('css/jquery.bxslider.css') }}" rel="stylesheet" />


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

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

	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="{{ route('home') }}" class="site-logo">
							<img src="{{ asset('img/logo180.png') }}" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
                    
						<form class="header-search-form">
							<input type="text" placeholder="Busca lo nuevo de la temporada" style="border:0.2em solid #f8d881">
							<button><i class="flaticon-search" style="color: #f8d881"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
                      
						<div class="user-panel">
							@if(!empty($user))
							<div class="up-item">
									<i class="flaticon-profile" style="color:#ffc107"></i>
									<a href="" style="color:#f8d881">{{$user->name}}</a>
								</div>
							@else
							<div class="up-item">
								<i class="flaticon-profile" style="color:#000"></i>
								<a href="{{ route('Showlogin') }}" style="color:#000">Ingresa</a> <span style="color:#000">||</span> <a href="{{ route('register') }}" style="color:#000">Registrate</a>
							</div>
							@endif
							{{-- <div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="{{ route('home') }}">Inicio</a></li>
					<li><a href="#">Sobre Nosotros</a></li>
					@foreach($categorie as $categ)
						<li><a href="#">{{$categ->name}}</a>
							<ul class="sub-menu">
								@foreach($subcategorie as $sub)	
									@if ( $sub->id_categorie == $categ->id_categorie )
										<li><a href="{{ route('pageproducts',[$sub->id_subcategorie]) }}">{{$sub->name}}</a></li>
									@endif
								@endforeach	
							</ul>
	                    </li>
					@endforeach	
                    <li><a href="{{ route('BlogSite') }}">Blog</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
				</ul>
			</div>
		</nav>
	</header>

    

    @yield('content')



    <section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="index.html"><img src="{{ asset('img/logo160.png') }}" alt=""></a>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Quieres Saber los Ultimos Productos en Tendencia?</h2>
                        <form action="">
							<div class="form-group">
								<label for="" class="text-white">Subscribirse:</label>
								<label for="" class="text-white">Lo que deseas, Nosotros te ayudamos</label>
								<input type="email" name="" id="" class="form-control" placeholder="Email">
								<small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
								<br>
								<button type="submit" class="btn btn-warning">Enviar</button>
							</div>
						</form>
						
						<a href="#" class="text-white">Condiciones de Uso</a>	
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Instagram</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Leer Más</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Leer Más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Ubicación</h2>
						<div class="con-info">
							<span></span>
							<p>Insutrendy Global Trade </p>
						</div>
						<div class="con-info">
							<span></span>
							<p>Room 1309, Block 9, Aoyuandi Distric, Panyu district, Guangzhou C. </p>
						</div>
						<div class="con-info">
							<span></span>
							<p>020-84506572</p>
						</div>
						<div class="con-info">
							<span></span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
                    <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                    <a href="" class="instagram"><span></span></a>
                    <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                    <a href="" class="instagram"><span></span></a>
                    <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                    <a href="" class="instagram"><span></span></a>
                    <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                    <a href="" class="instagram"><span></span></a>
                    <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                    <a href="" class="instagram"><span></span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Insutrendy <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank"></a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
	<script src="{{ asset('js/animate.js') }}"></script>

	</body>
</html>