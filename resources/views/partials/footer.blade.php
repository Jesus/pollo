<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
	<div class="container" style="padding: 20px; width: 100%; background-color: black; color: white; font-size: 18px; text-align: center;">
	@if (Auth::user())
		Bienvenid@ <i class="glyphicon glyphicon-user"></i> {{ strtoUpper(Auth::user()->name) }}, <strong class="text-info">¿Que vas a pedir hoy?</strong>
	@else
		<div class="col-md-2 col-md-offset-1">
			<i class="glyphicon glyphicon-phone-alt"></i> 629-54-2-26-48
		</div>
		<div class="col-md-2 col-md-offset-2" style="color: orange;">
			<strong>POLLOS CARDONA</strong>
		</div>
		<div class="col-md-2 col-md-offset-2">
			<i class="glyphicon glyphicon-home"></i> Bustamante I. Tagle
		</div>
	@endif
	</div>	
</nav>