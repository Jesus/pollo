@extends('app')

@section('contenet')
<div class="modal fade" id="modal-id6">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Editar producto</h4>
            </div>
            <div class="modal-body">
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
                        <label class="col-md-4 control-label">Precio</label>
                        <div class="col-md-6"> 
                            {!! Form::number('precio', null, ['class' => 'col-md-4 form-control', 'placeholder' => old('precio')]) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Actualizar',['class' => 'btn btn-primary col-md-offset-5']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@endsection