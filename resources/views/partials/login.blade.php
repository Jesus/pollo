<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center"><i class="glyphicon glyphicon-log-in"></i> Iniciar Sesión</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" role="form" method="POST" action="/auth/login">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-4 control-label"><i class="glyphicon glyphicon-envelope"></i> Correo electrónico</label>
						<div class="col-md-6">
							<input type="email" name="email" class="form-control" placeholder="Ingresa tu correo" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label"><i class="glyphicon glyphicon-eye-open"></i> Contraseña</label>
						<div class="col-md-6">
							<input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña"/>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"/>Recordarme
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-8 col-md-offset-4">
							<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
								<i class="glyphicon glyphicon-log-in"></i> Iniciar Sesión
							</button>

							<a href="/password/email">Olvido su contraseña?</a>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer bg-primary">
			</div>
		</div>
	</div>
</div>