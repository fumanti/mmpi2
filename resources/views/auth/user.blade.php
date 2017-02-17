@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li><a href="{{url('/auth/users')}}">Utenti registrati</a></li>
	        <li class="active"><a href="{{url('/auth/users/'.$user->id)}}">Modifica</a></li>
	    </ul>
	</div>	
	<div class="row-fluid">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading">Modifica utente</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong class="fa fa-meh-o fa-2x">&nbsp;Verificare i dati inseriti.</strong><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li class="fa fa-exclamation-circle">&nbsp;{{ $error }}</li><br>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" method="POST" action="{{ url('/auth/users/update/'.$user->id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{ $user->id }}">
						<input type="hidden" name="update" value="true">
						<div class="form-group">
							<label class="col-md-4 control-label">Nome e cognome</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ $user->name }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Indirizzo eMail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ $user->email }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Amministratore</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="admin" value="{{ $user->admin ? 1 : 0 }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Max numero test</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="max_test" value="{{$user->max_test}}" placeholder="illimitato" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" value="" placeholder="Password salvata" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Conferma Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation" value="" placeholder="Password salvata" >
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-action btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Salva</button>
								<a href="{{url('/auth/users')}}" class="btn btn-action btn-default"><i class="fa fa-undo"></i>&nbsp;&nbsp;Annulla</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
