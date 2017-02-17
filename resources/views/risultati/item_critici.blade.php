<div class="container-fluid" style="margin-left:8px">
    <div class="row">
      <br>
    </div>
    @if($test->risultati->count()>0)
      <div class="row-fluid">
    	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Item critici</h3>
		  </div>
		  <div class="panel-body">
	 		@foreach($scale as $scala)
		 		@if(($scala->codice =='SUI') || ($scala->codice =='HLP')|| ($scala->codice =='AXY')|| ($scala->codice =='RC6')|| ($scala->codice =='RC8')|| ($scala->codice =='SUB')|| ($scala->codice =='AGG'))
			 		@if($test->risultati->where('codice_scala',$scala->codice)->first()->punteggio_t >= 65)	  
					  <div class="row-fluid col-md-12" style="margin-bottom:2px">
			  			<h5>
			  			  <div class="col-md-1">&nbsp;</div>
				          <div class="col-md-10"><b>{{ $scala->codice }} - {{ $scala->descrizione }}</b></div>
				          <div class="col-md-1">&nbsp;</div>
				      	</h5>
				      </div>
			          @foreach($item_critici as $item_critico)
				      	@if($item_critico['codice'] == $scala->codice)
			            <div class="row-fluid col-md-12 offset-md-1">
			              <div class="col-md-1 text-right pull-left">{{ $item_critico['item_id'] }}</div>
			              <div class="col-md-10 text-left">{{ $item_critico['testo'].' ('.$item_critico['risposta'].')' }}</div>
			              <div class="col-md-1"></div>
			         	</div>
			            @endif
			          @endforeach
					@endif
				@endif
    		@endforeach	
    		<div><br><br>
    		</div>
	      </div>
		</div>
      </div>
    @endif
  	<div class="row">
    	<br>
  	</div>   
</div>





