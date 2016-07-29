@extends('app')

@section('content')
	<!-- <img alt="slider" src="images/pollo1.jpg" style="width: 100%; height: 529px; margin-top: -25px; padding: 0;"> -->

	<div id="slider" class="carousel slide" data-ride="carousel" style="margin-top: -25px;">
		<ol class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class=""></li>
			<li data-target="#slider" data-slide-to="1" class=""></li>
			<li data-target="#slider" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="images/pollo1.jpg" style="width: 100%; height: 535px;">
				<div class="container">
					<div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
						<h1>Regístrate y aprovecha nuestras promociones.</h1>
						<p>Nota: Si eres un usuario registrado puedes aprovechar todos nuestros descuentos y promociones.</p>
						<p>Además de acceder a todas las funciones de nuestro sitio, como dejarnos tus comentarios y sugerencias.</p>
						<p><a data-toggle="modal" href='#modal-id2' class="btn btn-lg btn-primary" href="#" role="button"><i class="glyphicon glyphicon-user"></i> Registrarse</a></p>
					</div>
				</div>
			</div>
			<div class="item">
				<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="images/pollo5.jpg" style="width: 100%; height: 535px;">
				<div class="container">
					<div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
						<h1>Se te antojo?</h1>
						<p>No esperes más!!!</p>
						<p>Pídelo ahora en linea, por teléfono o visítanos...</p>
						<p><a data-toggle="modal" href='#modal-id7' class="btn btn-lg btn-primary" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Pídelo Ahora!!!</a></p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="images/pollo4.jpg" style="width: 100%; height: 535px;">
				<div class="container">
					<div class="carousel-caption" style="background-color: rgba(0,0,0,0.5); border-radius: 10px;">
						<h1>Realiza tu pedido en linea.</h1>
						<p>Ahora ya puedes realizar tu pedido desde tu casa u oficina, desde una computadora o dispositivo móvil.</p>
						<p>Te lo llevamos hasta tu domicilio sin ningún costo extra.</p>
						<p><a data-toggle="modal" href='#modal-id7' class="btn btn-lg btn-primary" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Haz tu pedido</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
@endsection