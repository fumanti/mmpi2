	<div class="table-responsive">
		<table id="testtable" class="table table-striped paginated">
			<thead>
				<tr>
					<th><a class="sort" href="#" id="id">Id &nbsp;<span class="fa fa-sort" aria-hidden="true"></span></a></th>
					<th><a class="sort" href="#" id="cognome">Cognome &nbsp;<span class="fa fa-sort" aria-hidden="true"></span></a></th>
					<th><a class="sort" href="#" id="nome">Nome &nbsp;<span class="fa fa-sort" aria-hidden="true"></span></a></th>
					<th><span class="text-primary" href="#" id="data_nascita">Data nascita &nbsp;</span></th>
					<th><span class="text-primary" href="#" id="data_somministrazione">Data test &nbsp;</span></th>
					@if(Auth::user()->admin)<th><span class="text-primary" id="name" href="#">Somministrato da &nbsp;</span></th>@endif
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