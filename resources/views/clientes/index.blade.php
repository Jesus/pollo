@extends('app')

@section('content')

@if(Session::has('eliminado'))
	<div class="container">
	    <div class="alert alert-danger">
	        <p>{{Session::get('eliminado')}}</p>
	    </div>
	</div>
@endif

<div class="container">

	<h1 class="text-center" style="color: navy; margin-bottom: 40px;"><i class="glyphicon glyphicon-list-alt"></i> Listado de Clientes</h1>

	<div class="panel panel-default">
	    <div class="panel-heading">
	    	<p class="text-primary"><i class="glyphicon glyphicon-saved"></i> {{ $clientes->total() }} Clientes Registrados</p>
	    </div>
	        <div class="panel-body">
	            <table class="table table-striped task-table">
	                <thead>
	                    <tr>
	                        <th><i class="glyphicon glyphicon-user"></i> Nombre</th>
							<th><i class="glyphicon glyphicon-home"></i> Dirección</th>
							<th><i class="glyphicon glyphicon-phone"></i> Teléfono</th>
							<th><i class="glyphicon glyphicon-tasks"></i> Acciones</th>
	                    </tr>   
	                </thead>
	                <tbody>
	                @foreach ($clientes as $cliente)
		                <tr>
	    	                <td>{{ $cliente->name }}</td>
							<td>{{ $cliente->address }}</td>
							<td>{{ $cliente->phone }}</td>
							<td>
								<form action="{{ url('clientes/' . $cliente->id) }}" method="POST">
			                    	{!! csrf_field() !!}
			                    	{!! method_field('DELETE') !!}
			                    	<button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></button>
			                	</form>
							</td>
	                	</tr>
	                @endforeach
	            </tbody>
	        </table>
	        {!! $clientes->render() !!}
	    </div>
	</div>
</div>
@endsection