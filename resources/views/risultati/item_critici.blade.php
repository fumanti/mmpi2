<div class="container-fluid" style="margin-left:8px">
    <div class="row">
      <br/>
    </div>
      <div class="row-fluid">
    	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Item critici</h3>
		  </div>
		  <div class="panel-body">
	 		@if( count($item_critici)>0)	
	 		@foreach(array_unique(array_pluck($item_critici, 'codice')) as $scala)
					  <div class="row-fluid col-md-12" style="margin-bottom:2px;margin-top20px">
			  			<h5>
			  			  <div class="col-md-1">&nbsp;</div>
				          <div class="col-md-10"><b>{{$scala}} - {{ $item_critici[array_search($scala,array_column($item_critici,'codice'))]['descrizione'] }}</b></div>
				          <div class="col-md-1">&nbsp;</div>
				      	</h5>
				      	<br>
				      </div>
			          @foreach($item_critici as $item_critico)
				      	@if($item_critico['codice'] == $scala)
			            <div class="row-fluid col-md-12 offset-md-1">
			              <div class="col-md-1 text-right pull-left">{{ $item_critico['item_id'] }}</div>
			              <div class="col-md-10 text-left">{{ $item_critico['testo'].' ('.$item_critico['risposta'].')' }}</div>
			              <div class="col-md-1"></div>
			         	</div>
			            @endif
			          @endforeach
    		@endforeach	
    		@else
    			<div class="row-fluid col-md-12">
    				<br>
    				<p>Nessun item critico rilevato.</p>
    				<br>
    			</div>
    		@endif
	      </div>
		</div>
      </div>
  	<div class="row">
    	<br/>
  	</div>   
</div>





