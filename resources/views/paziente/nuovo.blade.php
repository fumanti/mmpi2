@extends('app')

@section('content')
{!! Form::open() !!}

<div class="container">
	<div class="row">
		<h3>Inserisci un nuovo test</h3>
	</div>	
    <div class="row">   				
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title"> Inserisci dati paziente </h2>
			</div>
			<div class="panel-body">
				<div class="form-group">
					{!! Form::label('nome', 'Nome:')!!}
					{!! Form::text('nome', null, ['class' => 'form-control', 'required' => '""', 'autofocus' => '""']) !!}
				<div>
			</div>
			<br>	
			<div class="form-group">
				{!! Form::label('cognome', 'Cognome:')!!}
				{!! Form::text('cognome', null, ['class' => 'form-control', 'required' => '""']) !!}
			<div>
			<br>
			<div class="form-group">
				{!! Form::label('data_nascita', 'Data di nascita:')!!}
				{!! Form::text('data_nascita', null, ['class' => 'form-control', 'required' => '""']) !!}
			<div>
			<br>
			<div class="form-group">
				{!! Form::label('sesso', 'Sesso:')!!}
				{!! Form::select('sesso', ['Maschile' => 'Maschile', 'Femminile'=>'Femminile']) !!}
			<div>
			<div class="form-group">
				{!! Form::label('stato_civile', 'Stato civile:')!!}
				{!! Form::text('stato_civile', null, ['class' => 'form-control']) !!}
			<div>
		</div>
	</div>
	<hr>
	<div class="form-group">
		{!! Formu::cancel('Torna alla ricerca', ['class'=>'btn btn-default form-control']) !!}
		{!! Form::submit('Salva e prosegui', ['class'=>'btn btn-success form-control']) !!}
	</div>
{!! Form::close() !!}
@endsection