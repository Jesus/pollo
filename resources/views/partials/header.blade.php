<header>
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/" style="margin-top: -25px; color: orange !important;" ><img src="{{url('images/logo.png')}}" style="width: 60px; margin: 0 auto;" alt="">Pollos Cardona</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/promociones') }}"><img src="{{url('images/promocion.png')}}" style="width: 40px;" alt=""> Promociones</a></li>
					<li><a data-toggle="modal" href='#modal-id7'><img src="{{url('images/pedido.png')}}" style="width: 40px;" alt=""> Haz tu Pedido</a></li>
					<li><a href="{{ url('/comentarios') }}"><img src="{{url('images/comment.png')}}" style="width: 40px;" alt=""> Comentarios</a></li>
					<li><a href="{{ url('/ubicanos') }}"><img src="{{url('images/map-icon.png')}}" style="width: 40px;" alt=""> Ubícanos</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a data-toggle="modal" href='#modal-id' href="#"><img src="{{url('images/user.png')}}" style="width: 40px;" alt=""> Inicia Sesión</a></li>
					<li><a data-toggle="modal" href='#modal-id2' href="#"><img src="{{url('images/user-new.png')}}" style="width: 40px;" alt=""> Regístrate</a></li>
				@else
					<li class="dropdown" style="margin-top: 10px;">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ strtoUpper(Auth::user()->name) }} <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
							<li><a href="{{ url('/pedidos') }}"><i class="glyphicon glyphicon-shopping-cart"></i> Revisar Pedidos</a></li>
							<li><a href="{{url('comentarios')}}"><i class="glyphicon glyphicon-star"></i> Califícanos</a></li>
							<li><a href="{{ url('auth/logout') }}"><i class="glyphicon glyphicon-log-out"></i> Salir</a></li>
						</ul>
					</li>
				@endif
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	@include('partials.login')
	@include('partials.register')
</header>