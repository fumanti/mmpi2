<div class="container-fluid" style="margin-left:8px">
    <br>
    <br> 	
    
	@foreach($profilo as $k => $s)
	  	<br>
      	<div class="row-fluid">
			<div class="panel panel-primary">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">{{$k}}</h3>
		  		</div>
		  		<div class="panel-body">
	  		      	<div class="table-responsive">
	        			<table id="testtable" class="table" style="margin-top:-1px">
					      <tbody>
								@foreach($s as $value)
									@if( 	   
										   (isset($value["personalita"]) && count($value["personalita"])) 	|| 
										   (isset($value["correlati"]) && count($value["correlati"])) 		|| 
										   (isset($value["diagnosi"]) && count($value["diagnosi"])) 		|| 
										   (isset($value["trattamento"]) && count($value["trattamento"])) 
								 		)
							  			<tr>
							  				<td>
								  				<div class="row-fluid col-lg-12">
								  					<div class="col-lg-12">
								  						<h4>{{$value["codice"]}} &minus; {{$value["descrizione"]}} ({{$value["punteggio"]}})</h4>
								  					</div>
								  					<br><br>
											        <div class="text-left col-lg-3 col-md-6" style="min-height:120px">
											        	<div class="col-lg-12" style="height:45px; border-bottom:dotted 1px gainsboro">
											        		<span>
									  							<b>Sintomi clinici, tendenze comportamentali e caratteristiche di personalità</b>
											        		</span>
											        	</div>
											        	<div class="col-lg-12">
												        	<br>
												        	@if(count($value["personalita"]))
												          		@foreach($value["personalita"] as $i)<p>{{$i}}</p>@endforeach
												          	@else
												          		&nbsp;&minus;&nbsp;
												          	@endif
											        	</div>
										          	</div>
											        <div class="text-left col-lg-3 col-md-6" style="border-left:solid 1px gainsboro; min-height:120px">
											        	<div class="col-lg-12" style="height:45px; border-bottom:dotted 1px gainsboro">
											        		<span>
										  						<b>Correlati Empirici</b>
												        	</span>
											        	</div>
											        	<div class="col-lg-12">
												        	<br>
												        	@if(count($value["correlati"]))
												          		@foreach($value["correlati"] as $i)<p>{{$i}}</p>@endforeach
												          	@else
												          		&nbsp;&minus;&nbsp;
											          		@endif
											        	</div>
									  				</div>
											        <div class="text-left col-lg-3 col-md-6" style="border-left:solid 1px gainsboro; min-height:120px">
												        <div class="col-lg-12" style="height:45px; border-bottom:dotted 1px gainsboro">
												        	<span>
										  						<b>Considerazioni diagnostiche</b>
												        	</span>
												        </div>
												        <div class="col-lg-12">
												        	<br>
												        	@if(count($value["diagnosi"]))
												          		@foreach($value["diagnosi"] as $i)<p>{{$i}}</p>@endforeach
												          	@else
												          		&nbsp;&minus;&nbsp;
											          		@endif											          	
												        </div>
									  				</div>
											        <div class="text-left col-lg-3 col-md-6" style="border-left:solid 1px gainsboro; min-height:120px">
											        	<div class="col-lg-12" style="height:45px; border-bottom:dotted 1px gainsboro">
											        		<span>
										  						<b>Considerazioni per il trattamento</b>
												        	</span>
											        	</div>
											        	<div class="col-lg-12">
												        	<br>
												        	@if(count($value["trattamento"]))
												          		@foreach($value["trattamento"] as $i)<p>{{$i}}</p>@endforeach
												          	@else
												          		&nbsp;&minus;&nbsp;
											          		@endif
											        	</div>
									  				</div>								  											  				
								  				</div>
							  				<!-- </div> -->
							  				</td>
								  		</tr>
								  	@endif
								@endforeach
							
						</tbody>
						</table>
			  		</div>
		  		</div>
	    	</div>
	  	</div>
	@endforeach
  	
  	<div class="row">
    	<br>
  	</div>   
</div>





