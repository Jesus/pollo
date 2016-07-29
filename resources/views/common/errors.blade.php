<div class="container">
    @if (Session::has('errors'))
	    <div class="alert alert-danger" role="alert">
			<ul>
            <strong>Ups Algo salió mal: </strong>
		    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
	        @endforeach
	        </ul>
	    </div>
	@endif
</div>