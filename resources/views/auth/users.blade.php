@extends('app')

@section('content')
<div class="container-fluid" style="margin-left:8px">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li class="active"><a href="{{url('/auth/users')}}">Utenti registrati</a></li>
	    </ul>
	</div>	
	<div class="row-fluid">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <div class="panel-title"><label>Utenti registrati</label><a class="btn btn-primary btn-sm pull-right" href="{{ url('/auth/register') }}"><i class="glyphicon glyphicon-plus"></i> &nbsp;Inserisci nuovo</a></div>
		  </div>
			@if(count($users))
			<div class="table-responsive">
				<table id="testtable" class="table table-striped">
					<thead>
						<tr>
							<th>Nome</th>
							<th>email</th>
							<th>admin</th>
							<th>max test</th>
							<th>eseguiti</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users->except([1, Auth::id()]) as $user)
							<tr>
								<td class="col-md-3">{{$user->name}}</td>
								<td class="col-md-3">{{ $user->email}}</td>
								<td class="col-md-1">@if($user->admin)<span class="fa fa-check-square-o"></span>@else<span class="fa fa-square-o"></span>@endif</td>
								<td class="col-md-1">{{ $user->admin ? '': $user->max_test}}</td>
								<td class="col-md-1">{{ $user->admin ? '': ($user->counters()->get()->count() > 0 ? $user->counters()->get()->count() : '') }}</td>
								<!--<td class="col-md-2"> {{ str_pad($user->created_at->day, 2, '0', STR_PAD_LEFT).'-'.str_pad($user->created_at->month, 2, '0', STR_PAD_LEFT).'-'.$user->created_at->year}}</td>-->
								<td>@if(Auth::user()->admin)<a class="btn btn-action btn-primary btn-sm" href="{{ url('/auth/users/'.$user->id) }}"><i class="glyphicon glyphicon-edit"></i> &nbsp; Modifica </a>@endif</td>
								<td>@if(Auth::user()->admin)<a class="btn btn-action btn-danger btn-sm" href="{{ url('/auth/users/elimina/'.$user->id) }}"><i class="glyphicon glyphicon-trash"></i> &nbsp; Elimina </a>@endif</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@endif
		  <div class="panel-footer">
		  </div>
		</div>
	</div>
</div>
@endsection
