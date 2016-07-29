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

<div class="container">

	<h1 class="text-center" style="color: navy; margin-bottom: 40px;"><i class="glyphicon glyphicon-list-alt"></i> Listado de Pedidos</h1>

	@if (count($pedidos) == 0)

	<div class="alert alert-info">
		<h3 class="text-center">Aun no cuentas con pedidos.</h3>
	</div>

	@else

	<div class="panel panel-default">
	    <div class="panel-heading">
	    	<p class="text-primary"><i class="glyphicon glyphicon-saved"></i> 
	    	@if (Auth::user())
	    		@if(Auth::user()->type === 'admin')
	    			{{ $pedidos->total() }}
	    		@endif
	    	@endif

	    	Pedidos Registrados</p>

	    </div>
	        <div class="panel-body">
	            <table class="table table-striped task-table">
	                <thead>
	                    <tr>
							<th><i class="glyphicon glyphicon-adjust"></i> Cantidad</th>
							<th><i class="glyphicon glyphicon-list"></i> Descripción</th>
							<th><i class="glyphicon glyphicon-user"></i> Cliente</th>
							<th><i class="glyphicon glyphicon-home"></i> Dirección</th>
							<th><i class="glyphicon glyphicon-stats"></i> Estatus</th>
							<th><i class="glyphicon glyphicon-tasks"></i> Acciones</th>
	                    </tr>   
	                </thead>
	                <tbody>
	                @if(Auth::user()->type == 'admin')
		                @foreach ($clientes as $cliente)
			                @foreach ($cliente->pedidos as $pedido)
				                <tr>
			    	               <td>{{ $pedido->cantidad }}</td>
									<td>
									@if($pedido->description == 0)
										Pollo Asado
									@else
										1/2 Pollo Asado
									@endif
									</td>
									<td>{{ $cliente->name }}</td>
									<td>{{ $cliente->address }}</td>
									<td>
									@if($pedido->status == '0')
										Surtiendo
									@else
										Surtido
									@endif
									</td>
									<td>
										<form action="{{ url('pedidos/' . $pedido->id) }}" method="POST">
					                    	{!! csrf_field() !!}
					                    	{!! method_field('DELETE') !!}
					                    	<button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></button>
					                    	<a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
					                    </form>
									</td>
			                	</tr>
			                @endforeach
			            @endforeach
		            @else
		            	@foreach ($pedidos as $pedido)
			                <tr>
		    	               <td>{{ $pedido->cantidad }}</td>
								<td>
								@if($pedido->description == 0)
									Pollo Asado
								@endif
								@if($pedido->description == 1)
									1/2 Pollo Asado
								@endif
								</td>
								<td>{{ Auth::user()->name }}</td>
								<td>{{ Auth::user()->address }}</td>
								<td>
								@if($pedido->status == '0')
									Surtiendo
								@else
									Surtido
								@endif
								</td>
								<td>
									<form action="{{ url('pedidos/' . $pedido->id) }}" method="POST">
				                    	{!! csrf_field() !!}
				                    	{!! method_field('DELETE') !!}
				                    	<button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></button>
				                    	<a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
				                    </form>
								</td>
		                	</tr>
		                @endforeach
		            @endif
	            </tbody>
	        </table>
	        @if (Auth::user())
	    		@if(Auth::user()->type === 'admin')
	    			{{ $pedidos->render() }}
	    		@endif
	    	@endif
	    </div>
	</div>
	@endif
</div>
@endsection