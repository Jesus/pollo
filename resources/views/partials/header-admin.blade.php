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
					<li><a href="{{ url('/clientes') }}"><img src="{{url('images/user.png')}}" style="width: 40px;" alt=""> Clientes</a></li>
					<li><a href="{{ url('/productos') }}"><img src="{{url('images/money.png')}}" style="width: 40px;" alt=""> Productos</a></li>
					<li><a href="{{ url('/pedidos') }}"><img src="{{url('images/pedidos.png')}}" style="width: 40px;" alt=""> Pedidos</a></li>
					<li><a href="#"><img src="{{url('images/money.png')}}" style="width: 40px;" alt=""> Ventas</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown" style="margin-top: 10px;">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> {{ strtoUpper(Auth::user()->name) }} <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/promociones') }}"><img src="{{url('images/promocion.png')}}" style="width: 40px;" alt=""> Promociones</a></li>
							<li><a data-toggle="modal" href='#modal-id7'><img src="{{url('images/pedido.png')}}" style="width: 40px;" alt=""> Haz tu Pedido</a></li>
							<li><a href="{{ url('/comentarios') }}"><img src="{{url('images/comment.png')}}" style="width: 40px;" alt=""> Comentarios</a></li>
							<li><a href="{{ url('/ubicanos') }}"><img src="{{url('images/map-icon.png')}}" style="width: 40px;" alt=""> Ubícanos</a></li>
							<li><a href="#"><img alt="" src="{{url('images/user.png')}}" style="width: 40px;"> Perfil</a></li>
							<li><a href="{{ url('auth/logout') }}"><i class="glyphicon glyphicon-log-out"></i> Salir</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</header>