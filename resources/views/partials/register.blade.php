<div class="modal fade" id="modal-id2">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center"><i class="glyphicon glyphicon-check"></i> Registrarse</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['route' => 'auth/register', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            <label class="col-md-4 control-label"><i class="glyphicon glyphicon-user"></i> Nombre</label>
                            <div class="col-md-6"> 
                                {!! Form::input('text', 'name', '', ['class'=> 'form-control', 'placeholder' => 'Ingresa tu nombre']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><i class="glyphicon glyphicon-phone"></i> Teléfono</label>
                            <div class="col-md-6">
                                {!! Form::input('number', 'phone', '', ['class'=> 'form-control', 'placeholder' => 'Ingresa tu teléfono']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><i class="glyphicon glyphicon-home"></i> Dirección</label>
                            <div class="col-md-6">
                                {!! Form::input('text', 'address', '', ['class'=> 'form-control', 'placeholder' => 'Ingresa tu dirección']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><i class="glyphicon glyphicon-envelope"></i> Email</label>
                            <div class="col-md-6">
                                {!! Form::email('email', '', ['class'=> 'form-control', 'placeholder' => 'Ingresa tu correo']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"><i class="glyphicon glyphicon-eye-open"></i> Contraseña</label>
                            <div class="col-md-6"> 
                                {!! Form::password('password', ['class'=> 'form-control', 'placeholder' => 'Mínimo 6 caracteres']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"><i class="glyphicon glyphicon-eye-open"></i> Repetir Contraseña</label>
                            <div class="col-md-6"> 
                                {!! Form::password('password_confirmation', ['class'=> 'form-control', 'placeholder' => 'Mínimo 6 caracteres']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                {!! Form::submit('Registrarse',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>