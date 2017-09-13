<div class="container-fluid" style="margin-left:8px">
    <br>
    <br>

    @if($validita)
	@foreach($validita["Sezioni"]["I"]["Sottosezioni"] as $s)
	  	<br/>
      	<div class="row-fluid">
			<div class="panel panel-{{$s["interpretazione"]==0?'success':($s["interpretazione"]==4?'danger':'warning')}}">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">
		    			{{$s["Sottosezione"]}} <!-- <span class="fa fa-{{$s["interpretazione"]==0?'check':($s["interpretazione"]==4?'ban':'warning')}} fa-lg text-{{$s["interpretazione"]==0?'success':($s["interpretazione"]==4?'danger':'warning')}}"></span>		    			 -->
		    		</h3>
		  		</div>
		  		<div class="panel-body">
	  		      	<div class="table-responsive">
	        			<table class="table" style="margin-top:-1px">
						    <tbody>
							
							@foreach($s["Fonti"] as $gruppi)
								@foreach($gruppi as $key => $value)
					  			
					  			<tr style="border:0px">
					  				<td style="padding-top:20px">
						  				<div class="row-fluid">
						  					<div class="col-xs-1">
						  						&nbsp;
						  					</div>
									        <div class="col-xs-11 text-left"> <!-- style="border-bottom: dotted 1px gainsboro"> -->
									        	<h4><b>{{$key}}</b> &nbsp;&nbsp;&minus;&nbsp;&nbsp; {{$value["descrizione"]}} @if(array_key_exists("punteggio", $value)) ({{$value['punteggio']}}) @endif</h4>  	
							  				</div>
						  				</div>

						  				<div class="row-fluid">
						  					<div class="col-xs-1">
						  						@if(array_key_exists("risultato", $value))
						  						<span class="text-{{$value["risultato"]==0?'success':($value["risultato"]==4?'danger':'warning')}} pull-right fa fa-{{$value["risultato"]==0?'check':($value["risultato"]==4?'ban':'warning')}} fa-lg"></span>
						  						@endif
						  					</div>
						  					<div class="col-xs-11">
						  						@if(array_key_exists("minacce", $value))
							  						@foreach($value["minacce"] as $i)<p>{{$i}}</p>@endforeach
										        @endif

										        @if(array_key_exists("risultato", $value) && $value["risultato"])

							        				<div class="text-left">
								        				<b>Implicazioni per l'interpretazione:</b>
								        			</div>
								        			@foreach($value["implicazioni"] as $i)<p>{{$i}}</p>@endforeach

								  				@endif
						  					</div>

						  				</div>
					  				<!-- </div> -->
					  				</td>
						  		</tr>

								@endforeach
							@endforeach

							</tbody>
						</table>
			  		</div>
		  		</div>
	    	</div>
	  	</div>
	@endforeach
  	@endif
  	<div class="row">
    	<br>
  	</div>   
</div>





