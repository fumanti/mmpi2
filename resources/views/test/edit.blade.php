@extends('app')

@section('content')

{!! Form::open() !!}

<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li><a href="{{ session('owner')=='all' ? url('/test/all') : url('/test') }}">Test eseguiti</a></li>
	        <li><a href="{{ url('test/'.$test->id) }}">Dettaglio test</a></li>
	        <li class="active"><a href="{{ url('test/'.$test->id.'/edit') }}">Modifica dati paziente</a>
	    </ul>
	</div>
	<div class="row-fluid col-md-4 col-md-offset-4">   				
	  <div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Modifica dati paziente</h2>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" name="nome" value="{{$test->nome}}" class="form-control required" autofocus=""></input>
			</div>
			<div class="form-group">
				<label>Cognome:</label>
				<input type="text" name="cognome" value="{{$test->cognome}}" class="form-control required"></input>
			</div>
			<div class="form-group">
				<label>Data di nascita:</label>
				<input type="text" name="data_nascita" value="{{ $test->data_nascita }}" class="form-control date" maxlength="10"></input>
			</div>
			<div class="form-group">
				<label>Sesso:</label>
				{!! Form::select('sesso', ['M' => 'Maschile', 'F'=>'Femminile'], $test->sesso, ['class'=>'form-control select2', 'style' => 'width:100%;height:34px;', 'required'=>'""']) !!}
			</div>
			<div class="form-group">
				<label>Data di somministrazione:</label>
				<input type="text" name="data_somministrazione" value="{{$test->data_somministrazione}}" class="form-control date required" maxlength="10"></input>
				<input type="hidden" name="test_id" value="{{$test->id}}"></input>
			</div>
			<div class="text-right">
				<button type="submit" class="btn btn-action btn-info"><i class="fa fa-floppy-o"></i>&nbsp;&nbsp;Salva</button>
				<a href="{{ url('test/'.$test->id) }}" class="btn btn-action btn-default"><i class="fa fa-undo"></i>&nbsp;&nbsp;Annulla</a>
			</div>
		</div>
	  </div>
	</div>
</div>
{!! Form::close() !!}

@endsection

@section('footer')
<script type="text/javascript">
	$(document).ready(function(){
		$('.date').datetimepicker({locale:'it',format:'L'});
    })    
</script>
@endsection