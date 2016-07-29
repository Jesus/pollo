<div class="modal fade" id="modal-id3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Crear comentario</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'comentarios.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                <div class="form-group">
                    <label class="col-md-4 control-label">Calificación</label>
                    <div class="col-md-6"> 
                        {!! Form::select('calification', [0 => 'Positivo', 1 => 'Negativo'], null, ['class' => 'col-md-4 form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Comentario</label>
                    <div class="col-md-6"> 
                        {!! Form::textarea('description', null, ['class' => 'col-md-4 form-control', 'placeholder' => 'Por favor introduzca su comentario']) !!}
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Comentar',['class' => 'btn btn-primary col-md-offset-5']) !!}
                </div>

            {!! Form::close() !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>