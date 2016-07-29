<div class="modal fade" id="modal-id7">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title text-center">Haz tu pedido</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'pedidos.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                <div class="form-group">
                    <label class="col-md-4 control-label">Cantidad</label>
                    <div class="col-md-6"> 
                        {!! Form::number('cantidad', null, ['class' => 'col-md-4 form-control', 'placeholder' => 'Por favor introduzca la cantidad']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Descripción</label>
                    <div class="col-md-6"> 
                        {!! Form::select('description', [0 => '1 Pollo asado', 1 => '1/2 Pollo asado'], null, ['class' => 'col-md-4 form-control', 'placeholder' => 'Por favor elija su producto']) !!}
                    </div>
                </div>
                @if(Auth::user())
                @if(Auth::user()->type === 'admin')
                    <div class="form-group">
                        <label class="col-md-4 control-label">Estatus</label>
                        <div class="col-md-6"> 
                            {!! Form::select('status', [0 => 'Surtiendo', 1 => 'Surtido'], null, ['class' => 'col-md-4 form-control', 'placeholder' => old('status')]) !!}
                        </div>
                    </div>
                @endif
                @endif
                <div class="form-group">
                    {!! Form::submit('Crear Pedido',['class' => 'btn btn-primary col-md-offset-5']) !!}
                </div>

            {!! Form::close() !!}
            </div>
            <div class="modal-footer bg-primary">
            </div>
        </div>
    </div>
</div>