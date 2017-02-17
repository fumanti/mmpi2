@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li class="active"><a href="{{ url('/') }}">Home</a></li>
        </ul>
	</div>
	<div class="row-fluid">
		<a class="btn btn-primary" href="{{ url('/test/user') }}"><br><i class="fa fa-search fa-4x"></i><h3>Ricerca test</h3></a>
		@if(Auth::user()->can_make_new())<a class="btn btn-primary" href="{{ url('/test/nuovo') }}" @if(Auth::user()->has_max_test() && Auth::user()->tests_left()) data-toggle="tooltip" data-placement="right" title="Hai {{Auth::user()->tests_left()}} test a disposizione" @endif ><br><i class="fa fa-plus fa-4x"></i><h3>Crea nuovo</h3>@else&nbsp;@endif</a>
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