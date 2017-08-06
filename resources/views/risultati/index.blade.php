<div class="container-fluid" style="margin-left:8px">
    <div class="row">
      <br>
    </div>
    <div class="row-fluid">
		<label>Ordinamento per:</label>&nbsp;
		<div class="btn-group btn-input clearfix">
		  <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
		    <span data-bind="label">gruppi di scale</span> <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li class="disabled"><a id="ordine1" href="javascript:void(0)">gruppi di scale</a></li>
		    <li><a id="ordine2" href="javascript:void(0)">interpretazione</a></li>
		  </ul>
		</div>
    	<div class="pull-right">
    		<a id="esporta_excel" href="{{ url('test/'.$test->id.'/export') }}" class="btn" role="button"><i class="fa fa-file-excel-o"></i> &nbsp; Esporta in Excel </a>
    	</div>
    </div>
    <br>
    @if($test->risultati->count()>0)
  	@foreach($gruppi_scale as $gruppo_scala)
      <div class="row-fluid">
    	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{$gruppo_scala->descrizione}}</h3>
		  </div>
		  	<div class="table-responsive">
			    <table id="testtable" class="table table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="text-left col-md-1">Scala</th>
			          @foreach($gruppo_scala->scale as $scala)
			          <th  class="text-right">{{$scala->codice}}</th>
			          @endforeach
			          <th class="col-md-1">&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left col-md-1">Grezzo</td>
			          @foreach($gruppo_scala->scale as $scala)
			          <td class="text-right">
			          	@if($test->risultati->where('codice_scala',$scala->codice)->count())
			           		{{ $test->risultati->where('codice_scala',$scala->codice)->first()->punteggio_grezzo }}
		           		@endif &nbsp;
		           	  </td>
			          @endforeach
			          <td class="col-md-1">&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left col-md-1">T</td>
			          @foreach($gruppo_scala->scale as $scala)
			          <td class="text-right">
			          	@if($scala->codice != 'CNS' && $test->risultati->where('codice_scala',$scala->codice)->count()) 
			          	  {{ $test->risultati->where('codice_scala',$scala->codice)->first()->punteggio_t }}
			          	@endif&nbsp;
			          </td>
			          @endforeach
			          <td class="col-md-1">&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left col-md-1">% Risp.</td>
			          @foreach($gruppo_scala->scale as $scala)
			          <td class="text-right">
			          	@if($test->risultati->where('codice_scala',$scala->codice)->count()) 
			          	  {{ $test->risultati->where('codice_scala',$scala->codice)->first()->percentuale_risposte }}
			          	@endif&nbsp;
			          </td>
			          @endforeach
			          <td class="col-md-1">&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>
			</div>
		  <!-- <div class="panel-footer"><br><br></div> -->
		</div>
      </div>
    @endforeach
    @endif
  	<div class="row">
    	<br>
  	</div>   
</div>





