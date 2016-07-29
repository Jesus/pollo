@extends('app')

@section('content')

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <p class="text-center text-capitalize"><i class="glyphicon glyphicon-saved"></i> {{ $producto->name }}<a href="{{url('/productos')}}" class="btn btn-primary pull-right" ><i class="glyphicon glyphicon-remove"></i></a></p>
            </div>
            <div class="panel-body">
                {!! Form::model($producto, ['route' => ['productos.update', $producto->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                    <div class="form-group">
                        <label class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6"> 
                            {!! Form::text('name', null, ['class' => 'col-md-4 form-control', 'placeholder' => old('name')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Descripción</label>
                        <div class="col-md-6"> 
                            {!! Form::textarea('description', null, ['class' => 'col-md-4 form-control', 'placeholder' => old('description')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label"><i class="glyphicon glyphicon-euro"></i> Precio</label>
                        <div class="col-md-6"> 
                            {!! Form::number('precio', null, ['class' => 'col-md-4 form-control', 'placeholder' => old('precio')]) !!}
                        </div>
                    </div>

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