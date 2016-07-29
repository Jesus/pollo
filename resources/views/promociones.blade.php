@extends('app')

@section('content')
	<!-- <img alt="slider" src="images/pollo1.jpg" style="width: 100%; height: 529px; margin-top: -25px; padding: 0;"> -->

	<div class="container">
		<div class="panel-heading text-center">
			<h1 style="color: navy; margin-bottom: 30px;"><i class="glyphicon glyphicon-cutlery"></i> Nuestros Productos</h1>
		</div>
		<div class="col-md-4 anim">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center"><i class="glyphicon glyphicon-cutlery"></i> 1/2 Pollo Asado</div>
				</div>
				<div class="panel-body text-center">
					<p>Delicioso medio pollo asado al carbon, acompañado de su rica salsa y tortillas.</p>
					<p><small>** Hasta tu casa sin costo adicional</small></p>
				</div>
				<div class="panel-footer">
					<p class="text-center"><a href="#" class="btn btn-primary">Solo $45 pesos</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 anim">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center"><i class="glyphicon glyphicon-cutlery"></i> Pollo Asado</div>
				</div>
				<div class="panel-body">
					<ul class="">
						<li>1 y 1/2 Pollos</li>
						<li>2 Ensalada</li>
						<li>Refresco de 2 lts.</li>
					</ul><br>
					<p class="text-center"><small>** Hasta tu casa sin costo adicional</small></p>
				</div>
				<div class="panel-footer">
					<p class="text-center"><a href="#" class="btn btn-primary">Solo $150 pesos</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 anim">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center"><i class="glyphicon glyphicon-cutlery"></i> Promocion 3</div>
				</div>
				<div class="panel-body">
					<ul class="">
						<li>2 Pollo</li>
						<li>2 Ensalada</li>
						<li>Refresco de 3 lts.</li>
					</ul><br>
					<p class="text-center"><small>** Hasta tu casa sin costo adicional</small></p>
				</div>
				<div class="panel-footer">
					<p class="text-center"><a href="#" class="btn btn-primary">Solo $200 pesos</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="panel-heading text-center">
			<h1 style="color: navy; margin-bottom: 30px;"><i class="glyphicon glyphicon-cutlery"></i> Promociones</h1>
			<small class="text-danger"><i class="glyphicon glyphicon-asterisk"></i> Promociones para usuarios registrados.</small>
		</div>
		<div class="col-md-4 anim">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center"><i class="glyphicon glyphicon-cutlery"></i> Promoción 1</div>
				</div>
				<div class="panel-body">
					<ul class="">
						<li>1 Pollo</li>
						<li>1 Ensalada</li>
						<li>Refresco de 2 lts.</li>
					</ul><br>
					<p class="text-center"><small>** Hasta tu casa sin costo adicional</small></p>
				</div>
				<div class="panel-footer">
					<p class="text-center"><a href="#" class="btn btn-primary">Solo $100 pesos</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 anim">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center"><i class="glyphicon glyphicon-cutlery"></i> Promocion 2</div>
				</div>
				<div class="panel-body">
					<ul class="">
						<li>1 y 1/2 Pollos</li>
						<li>2 Ensalada</li>
						<li>Refresco de 2 lts.</li>
					</ul><br>
					<p class="text-center"><small>** Hasta tu casa sin costo adicional</small></p>
				</div>
				<div class="panel-footer">
					<p class="text-center"><a href="#" class="btn btn-primary">Solo $150 pesos</a></p>
				</div>
			</div>
		</div>
		<div class="col-md-4 anim">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title text-center"><i class="glyphicon glyphicon-cutlery"></i> Promocion 3</div>
				</div>
				<div class="panel-body">
					<ul class="">
						<li>2 Pollo</li>
						<li>2 Ensalada</li>
						<li>Refresco de 3 lts.</li>
					</ul><br>
					<p class="text-center"><small>** Hasta tu casa sin costo adicional</small></p>
				</div>
				<div class="panel-footer">
					<p class="text-center"><a href="#" class="btn btn-primary">Solo $200 pesos</a></p>
				</div>
			</div>
		</div>
	</div>
	@if(Auth::guest())
	<div class="text-center" style="color: white; background-color: rgba(0,0,0,0.5); padding: 
		10px; margin-top: 30px;">
		<strong>¿Aun no estas registrado?
		<a href="#" class="text-primary">Regístrate aqui!!!</a></strong>
	</div>
	@endif
@endsection