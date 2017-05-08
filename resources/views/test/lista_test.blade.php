
	<!--
	<script src="//code.jquery.com/jquery-1.12.3.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	<table class="table" id="table">
	    <thead>
	        <tr>
	            <th class="text-center">Id</th>
	            <th class="text-center">Cognome</th>
	            <th class="text-center">Nome</th>
	            <th class="text-center">Data nascita</th>
	            <th class="text-center">Data test</th>
	            <th class="text-center">&nbsp;</th>
	        </tr>
	    </thead>
	    <tbody>
			@foreach($tests as $test)
			<tr class="$test{{$test->id}}">
			    <td>{{$test->id}}</td>
			    <td>{{$test->cognome}}</td>
			    <td>{{$test->nome}}</td>
			    <td>{{$test->data_nascita}}</td>
			    <td>{{$test->data_somministrazione}}</td>
			    <td>
			    	<button class="edit-modal btn btn-info">
            			<span class="glyphicon glyphicon-edit"></span> Edit
        			</button>
			        <button class="delete-modal btn btn-danger">
			            <span class="glyphicon glyphicon-trash"></span> Delete
			        </button>
			    </td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<script>
	  $(document).ready(function() {
	    $('#table').DataTable();
	  });
 	</script>-->
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