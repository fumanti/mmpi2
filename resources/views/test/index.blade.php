@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li class="active"><a href="{{ $filter == 'Tutti i test' ? url('/test/all') : url('/test') }}">Test eseguiti</a></li>
	    </ul>
	</div>	
	<div class="row-fluid">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <div class="panel-title">
	    		<label>Test eseguiti</label>@if(Auth::user()->has_max_test() && Auth::user()->counters()->get()):&nbsp;{{ Auth::user()->counters()->get()->count() }}<label class="pull-right col-md-4" id="max_test">Numero massimo test: {{Auth::user()->max_test}}</label>@endif
		    	<input id="id_user" type="hidden" value="{{Auth::user()->id}}"/>
		    	@if(Auth::user()->admin)
				<div class="btn-group btn-input pull-right">
				  <button type="button" class="btn btn-primary dropdown-toggle form-control" data-toggle="dropdown">
				    <span data-bind="label">{{ $filter }}</span> <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu">
				    <li><a id="mytest" href="{{ url('/test') }}">I miei test</a></li>
				    <li><a id="alltest" href="{{ url('/test/all') }}">Tutti i test</a></li>
				  </ul>
				</div> 
				@endif
			</div>
		  </div>
			@if(count($tests))
				<div class="table-responsive">
					<table id="testtable" class="table table-striped paginated">
						<thead>
							<tr>
								<th>Id</th>
								<th>Cognome</th>
								<th>Nome</th>
								<th>Data nascita</th>
								<th>Data test</th>
								@if(Auth::user()->admin)<th>Somministrato da</th>@endif
								<th>@if(Auth::user()->can_make_new())<a class="btn btn-info btn-sm" style="width:180px" href="{{ url('/test/nuovo') }}"><i class="glyphicon glyphicon-plus"></i> &nbsp;Inserisci nuovo @if(Auth::user()->has_max_test() && Auth::user()->tests_left())&nbsp;&nbsp; <span class="badge" id="correzioni" data-toggle="tooltip" data-placement="top" title="Test a disposizione">{{Auth::user()->tests_left()}}</span>@endif</a>@else&nbsp;@endif</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tests as $test)
								<tr>
									<td class="col-md-1">{{$test->id}}</td>
									<td class="col-md-1 text-uppercase">{{$test->cognome}}</td>
									<td class="col-md-1">{{$test->nome}}</td>
									<td class="col-md-1">{{ $test->data_nascita}}</td>
									<td class="col-md-1">{{ $test->data_somministrazione}}</td>
									@if(Auth::user()->admin)<td class="col-md-1">@if($test->user){{ $test->user->name }}@endif</td>@endif
									<td class="col-md-2">
										<a class="btn btn-action btn-default btn-sm" href="{{ url('test/'.$test->id) }}"><i class="glyphicon glyphicon-search"></i> &nbsp; Dettaglio </a>
										<a class="btn btn-action btn-danger btn-sm" href="{{ url('test/elimina/'.$test->id) }}" onclick="return confirm('ATTENZIONE:\n\n vuoi eliminare il test di {{$test->cognome.' '.$test->nome }} ?')"><i class="glyphicon glyphicon-trash"></i> &nbsp; Elimina </a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			@else
				@if(Auth::user()->can_make_new())
					<div><br><center>Nessun test inserito&nbsp;<a class="btn btn-info btn-sm" href="{{ url('/test/nuovo') }}"><i class="glyphicon glyphicon-plus"></i> &nbsp;Inserisci nuovo @if(Auth::user()->has_max_test() && Auth::user()->tests_left())&nbsp;&nbsp; <span class="badge" id="correzioni" data-toggle="tooltip" data-placement="top" title="Test a disposizione">{{Auth::user()->tests_left()}}</span>@endif</a></center><br></div>
				@endif
			@endif
		  <div class="panel-footer">
		  	<center>{!! $tests->render() !!}</center>
		  </div>
		</div>
	</div>
</div>
@endsection

@section('footer')
<script>
  $(function(){
	$('[data-toggle="tooltip"]').tooltip();
  });
</script>
@endsection