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
				    <span data-bind="label">I miei test</span> <span class="caret"></span>
				  </button>
				  <ul id="menu_test" class="dropdown-menu" role="menu">
				    <li><a id="user">I miei test</a></li>
				    <li class="selected"><a id="all">Tutti i test</a></li>
				    
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
	 		@include('test/lista_test', ['tests'=>$tests])
		  </div>
		  {!! Form::close() !!}
		</div>
	</div>
</div>
@endsection

@section('footer')
<script src="../../js/ajaxUtils.js"></script>
<script src="../../js/test.js"></script>
<script>
$(document).ready(function(){
	setOwner("{{ session('owner') }}");
});
</script>
@endsection