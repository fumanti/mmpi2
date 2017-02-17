@extends('app')

@section('content')

{!! Form::open() !!}

<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li class="active"><a href="{{ url('test/nuovo') }}">Nuovo</a></li>
	    </ul>
	</div>
	<div class="row-fluid col-md-4 col-md-offset-4">   				
	  <div class="panel panel-primary">
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
				{!! Form::text('data_nascita', null, ['class' => 'form-control date', 'maxlength' => '10']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('sesso', 'Sesso:') !!}
				{!! Form::select('sesso', ['M' => 'Maschile', 'F'=>'Femminile'], 'M', ['class'=>'form-control select2', 'required'=>'""']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('data_somministrazione', 'Data di somministrazione:')!!} 
				{!! Form::text('data_somministrazione', null ,['class' => 'form-control date', 'required' => '""', 'maxlength' => '10']) !!}
			</div>
			<div class="text-right">
				{!! Form::hidden('id_user', Auth::user()->id) !!}
				<button type="submit" class="btn btn-action btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Salva</button>
				<a href="{{url('/home')}}" class="btn btn-action btn-default"><i class="fa fa-undo"></i>&nbsp;&nbsp;Annulla</a>
			</div>
		</div>
	  </div>
	</div>
</div>
{!! Form::close() !!}

@endsection

@section('footer')
<!--<script src="../../js/jquery.blockUI.js"></script>-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.date').datetimepicker({locale:'it',format:'L'});
		//$('[type=submit]').bind('click', function(){
		//	$.blockUI({message: '<h4><i class="fa fa-cog fa-spin"></i>&nbsp;Creazione del test in corso, attendere prego ... <br><br> Al termine della procedura sarete reindirizzati <br> alla pagina del test.</h4>'});
		//});
	    
    })    
</script>
@endsection