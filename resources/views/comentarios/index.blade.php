@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="container">
	    <div class="alert alert-success">
	        <p>{{Session::get('creado')}}</p>
	    </div>
	</div>
@endif
@if(Session::has('actualizado'))
	<div class="container">
	    <div class="alert alert-success">
	        <p>{{Session::get('actualizado')}}</p>
	    </div>
	</div>
@endif

<div class="container">

	<h1 class="text-center" style="color: navy; margin-bottom: 30px;">Opiniones de nuestros clientes</h1>
	<h3 class="text-center text-success">{{ $total }} Comentarios Registrados <i class="glyphicon glyphicon-comment"></i></h3>
	<p class="text-center text-danger"><small>** Regístrate para poder dejar tu comentario.</small></p>
	@if (Auth::user())
		@if (Auth::user()->comments['description'] == '')
		@include('comentarios.partials.comentar')
		<div class="container">
			<p class="col-md-offset-2"><a data-toggle="modal" href='#modal-id3' class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Crear Comentario</a></p>
		</div>
		@else
		@include('comentarios.partials.edit')
		<div class="container">
			<p class="col-md-offset-2"><a data-toggle="modal" href='#modal-id4' class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Editar Comentario</a></p>
		</div>
		@endif
	@endif
	@foreach ($clientes as $cliente)
	@if ($cliente->comments['description'] != '')
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-primary">
		    <div class="panel-heading text-center">
		    	<h4><i class="glyphicon glyphicon-user"> {{ strtoUpper($cliente->name) }}</i></h4>
		    </div>
     	   <div class="panel-body">
	        	<div class="col-md-8 text-info clearfix" style="font-size: 20px;">
	        		{{ $cliente->comments['description'] }}
	        	</div>
	        	<div class="col-md-4 text-right text-success">
	        		@if($cliente->comments['calification'] === '0')
	        		<p class="text-success">Positivo</p>
	        		<img alt="" src="images/malo.png" style="width: 40px; float: right">
	        		@else
	        		<p class="text-danger">Negativo</p>
					<img alt="" src="images/bueno.png" style="width: 40px; float: right">
					@endif
	        	</div>
		    </div>
		</div>
	</div>
	@endif
	@endforeach
</div>
<div class="container" style="margin-bottom: 50px;"> 
	{!! $clientes->render() !!}
</div>
@endsection
