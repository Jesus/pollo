<div class="modal fade" id="modal-id5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Crear Producto</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'productos.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                <div class="form-group">
                    <label class="col-md-4 control-label">Nombre</label>
                    <div class="col-md-6"> 
                        {!! Form::text('name', null, ['class' => 'col-md-4 form-control', 'placeholder' => 'Por favor introduzca el nombre']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Descripción</label>
                    <div class="col-md-6"> 
                        {!! Form::textarea('description', null, ['class' => 'col-md-4 form-control', 'placeholder' => 'Por favor introduzca su descripcion']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Precio</label>
                    <div class="col-md-6"> 
                        {!! Form::number('precio', null, ['class' => 'col-md-4 form-control', 'placeholder' => 'Por favor introduzca su precio']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Crear',['class' => 'btn btn-primary col-md-offset-5']) !!}
                </div>

            {!! Form::close() !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>