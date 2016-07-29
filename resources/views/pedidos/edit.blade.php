@extends('app')

@section('content')

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p class="text-center text-capitalize"><i class="glyphicon glyphicon-saved"></i> {{ $pedido->id }}<a href="{{url('/pedidos')}}" class="btn btn-primary pull-right" ><i class="glyphicon glyphicon-remove"></i></a></p>
            </div>
            <div class="panel-body">
                {!! Form::model($pedido, ['route' => ['pedidos.update', $pedido->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        <label class="col-md-4 control-label">Cantidad</label>
                        <div class="col-md-6"> 
                            {!! Form::number('cantidad', null, ['class' => 'col-md-4 form-control', 'placeholder' =>  old('cantidad') ]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Descripción</label>
                        <div class="col-md-6"> 
                            {!! Form::select('description', [0 => '1 Pollo asado', 1 => '1/2 Pollo asado'], null, ['class' => 'col-md-4 form-control', 'placeholder' => old('description')]) !!}
                        </div>
                    </div>

                @if(Auth::user()->type === 'admin')
                    <div class="form-group">
                        <label class="col-md-4 control-label">Estatus</label>
                        <div class="col-md-6"> 
                            {!! Form::select('status', [0 => 'Surtiendo', 1 => 'Surtido'], null, ['class' => 'col-md-4 form-control', 'placeholder' => old('status')]) !!}
                        </div>
                    </div>
                @endif

            </div>
            <div class="panel-footer">
                <div class="form-group">
                    {!! Form::submit('Actualizar',['class' => 'btn btn-primary col-md-offset-5']) !!}
                </div>

                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
@endsection