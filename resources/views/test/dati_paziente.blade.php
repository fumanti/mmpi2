 <div id="dati_paziente" class="panel panel-primary">
	<div class="panel-heading">
		<h2 class="panel-title">Dati paziente</h2>
	</div>
	<div class="panel-body">
		<div class="form-group">
			{!! Form::label('nome', 'Nome:')!!}
			{!! Form::text('nome', null, ['class' => 'form-control', 'required' => '""', 'autofocus' => '""']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('cognome', 'Cognome:')!!}
			{!! Form::text('cognome', null, ['class' => 'form-control', 'required' => '""']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('data_nascita', 'Data di nascita:')!!}
			{!! Form::text('data_nascita', null, ['class' => 'form-control', 'required' => '""']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sesso', 'Sesso:') !!}
			{!! Form::select('sesso', ['M' => 'Maschile', 'F'=>'Femminile'], 'M', ['class'=>'form-control select2', 'required'=>'""']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('data_somministrazione', 'Data di somministrazione:')!!}
			{!! Form::text('data_somministrazione', null ,['class' => 'form-control', 'required' => '""']) !!}
		</div>
	</div>
	<div class="panel-footer">
		<div class="form-group">
			<button id="chiudi" href="javascript:void(0)" class="btn">Annulla</button>
			<button id="salva" href="javascript:void(0)" class="btn btn-info">Salva</button>
		</div>
	</div>
</div>