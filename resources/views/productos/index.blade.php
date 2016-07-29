@extends('app')

@section('content')

@if(Session::has('eliminado'))
	<div class="container">
	    <div class="alert alert-danger">
	        <p>{{Session::get('eliminado')}}</p>
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

@include('productos.partials.crear')


<div class="container">

	<h1 class="text-center" style="color: navy; margin-bottom: 40px;"><i class="glyphicon glyphicon-list-alt"></i> Listado de Productos</h1>
	<div class="container">
		<p class=""><a data-toggle="modal" href='#modal-id5' class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Crear Producto</a></p>
	</div>
	<div class="panel panel-default">
	    <div class="panel-heading">
	    	<p class="text-primary"><i class="glyphicon glyphicon-saved"></i> {{ $productos->total() }} Productos en existencia</p>
	    </div>
	        <div class="panel-body">
	            <table class="table table-striped task-table">
	                <thead>
	                    <tr>
	                        <th><i class="glyphicon glyphicon-user"></i> Id</th>
							<th><i class="glyphicon glyphicon-home"></i> Nombre</th>
							<th><i class="glyphicon glyphicon-phone"></i> Descripción</th>
							<th><i class="glyphicon glyphicon-phone"></i> Precio</th>
							<th><i class="glyphicon glyphicon-tasks"></i> Acciones</th>
	                    </tr>   
	                </thead>
	                <tbody>
	                @foreach ($productos as $producto)
		                <tr>
	    	                <td>{{ $producto->id }}</td>
							<td>{{ $producto->name }}</td>
							<td>{{ $producto->description }}</td>
							<td>$ {{ $producto->precio }}</td>
							<td>
								<form action="{{ url('productos/' . $producto->id) }}" method="POST">
			                    	{!! csrf_field() !!}
			                    	{!! method_field('DELETE') !!}
			                    	<button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></button>
			                    	<a href="{{ route('productos.edit', $producto) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
			                    </form>
							</td>
	                	</tr>
	                @endforeach
	            </tbody>
	        </table>
	        {!! $productos->render() !!}
	    </div>
	</div>
</div>
@endsection