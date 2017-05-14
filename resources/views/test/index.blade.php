@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li id="test_eseguiti" class="active"><a href="{{ url('/test') }}">Test eseguiti</a></li>
	    </ul>
	</div>	
	<div class="row-fluid">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <div class="panel-title">
		    	{!! Form::open() !!}
	    		<label>Test eseguiti</label>@if(Auth::user()->has_max_test() && Auth::user()->counters()->get()):&nbsp;{{ Auth::user()->counters()->get()->count() }}<label class="pull-right col-md-4" id="max_test">Numero massimo test: {{Auth::user()->max_test}}</label>@endif
		    	<input id="id_user" type="hidden" value="{{ Auth::user()->id }}"/>
		    	
		    	@if(Auth::user()->admin)
				<div class="btn-group btn-input pull-right" id="owner">
				  <button type="button" class="btn btn-primary dropdown-toggle form-control" data-toggle="dropdown">
				    <span data-bind="label">{{ $owner == 'all' ? 'Tutti i test' : 'I miei test' }}</span> <span class="caret"></span>
				  </button>
				  <ul id="menu_test" class="dropdown-menu" role="menu">
				    <li {{($owner == 'user')?'class=disabled':''}}><a id="user" href="{{ url('/test/user') }}">I miei test</a></li>
				    <li {{($owner == 'all')?'class=disabled':''}}><a id="all"  href="{{ url('/test/all') }}">Tutti i test</a></li>
				  </ul>
				</div> 
				@endif
		    	<div class="btn-group btn-input pull-right" style="margin-right:15px; width:25%">
		    		<div class="input-group">
				      <span class="input-group-addon" id="search"><i class="fa fa-search"></i>
				      </span>
		      		  <input type="text" id="txtSearch"class="form-control" placeholder="Ricerca">
			      	</div>
		    	</div>

			</div>
		  </div>
		  <div id="lista_test">
	 		



					<div class="table-responsive">
						<table id="testtable" class="table table-striped paginated">
							<thead>
								<tr>
									<th><a class="sort" href="#" id="id">Id &nbsp;<span class="fa fa-sort" aria-hidden="true"></span></a></th>
									<th><a class="sort" href="#" id="cognome">Cognome &nbsp;<span class="fa fa-sort" aria-hidden="true"></span></a></th>
									<th><a class="sort" href="#" id="nome">Nome &nbsp;<span class="fa fa-sort" aria-hidden="true"></span></a></th>
									<th><a class="sort" href="#" id="data_nascita">Data nascita &nbsp;</a></th>
									<th><a class="sort" href="#" id="data_somministrazione">Data test &nbsp;</a></th>
									@if(Auth::user()->admin)<th><a class="sort" id="name" href="#">Somministrato da &nbsp;</a></th>@endif
									<th>@if(Auth::user()->can_make_new())<a class="btn btn-info btn-sm" style="width:180px" href="{{ url('/test/nuovo') }}"><i class="glyphicon glyphicon-plus"></i> &nbsp;Inserisci nuovo @if(Auth::user()->has_max_test() && Auth::user()->tests_left())&nbsp;&nbsp; <span class="badge" id="correzioni" data-toggle="tooltip" data-placement="top" title="Test a disposizione">{{Auth::user()->tests_left()}}</span>@endif</a>@else&nbsp;@endif</th>
								</tr>
							</thead>
							<tbody>
							@if(count($tests)>0)
								@foreach($tests as $test)
									<tr>
										<td class="col-md-1">{{$test->id}}</td>
										<td class="col-md-1 text-uppercase">{{$test->cognome}}</td>
										<td class="col-md-1">{{$test->nome}}</td>
										<td class="col-md-1">{{ $test->data_nascita}}</td>
										<td class="col-md-1">{{ $test->data_somministrazione}}</td>
										@if(Auth::user()->admin)<td class="col-md-1">@if($test->user){{ $test->user->name }}@else&nbsp;@endif</td>@endif
										<td class="col-md-2">
											<a class="btn btn-action btn-default btn-sm" href="{{ url('test/'.$test->id) }}"><i class="glyphicon glyphicon-search"></i> &nbsp; Dettaglio </a>
											<a class="btn btn-action btn-danger btn-sm" href="{{ url('test/elimina/'.$test->id) }}" onclick="return confirm('ATTENZIONE:\n\n vuoi eliminare il test di {{$test->cognome.' '.$test->nome }} ?')"><i class="glyphicon glyphicon-trash"></i> &nbsp; Elimina </a>
										</td>
									</tr>
								@endforeach
							@endif
							</tbody>
						</table>
					</div>
				@if(count($tests)==0)
					@if(Auth::user()->can_make_new())
						<div><br><center>Nessun test trovato.</center><br></div>
					@endif
				@endif
				<div class="panel-footer">
					<center>{!! $tests->render() !!}</center>
				</div>





		  </div>
		  {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection

@section('footer')
<script src="../../js/test.js"></script>
@endsection