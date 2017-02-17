<div class="container-fluid" style="margin-left:8px">
    <div class="row">
      <br>
    </div>
    <div class="row-fluid">
		<label>Ordinamento per:</label>&nbsp;
		<div class="btn-group btn-input clearfix">
		  <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
		    <span data-bind="label">interpretazione</span> <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a id="ordine1" href="javascript:void(0)">gruppi di scale</a></li>
		    <li class="disabled"><a id="ordine2" href="javascript:void(0)">interpretazione</a></li>
		  </ul>
		</div>
    	<div class="pull-right">
    		<a id="esporta_excel" href="{{ url('test/'.$test->id.'/export') }}" class="btn" role="button"><i class="fa fa-file-excel-o"></i> &nbsp; Esporta in Excel </a>
    	</div>
    </div>
    <br>
    @if($test->risultati->count()>0)
      <div class="row-fluid">
    	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Validità del protocollo</h3>
		  </div>  		
		  	<div class="table-responsive">
			    <table class="table table-list table-bordered-horizontal table-striped text-right" style="border-bottom:solid 2px lightgrey">
			      <thead>
			        <tr>
			        	<th class="text-primary" colspan="7">STILE DI RISPOSTA CHE NON CONSIDERA IL CONTENUTO</th>
			       	</tr>
			        <tr>
			          <th class="text-center col-md-1">Scala</th>
			          <th class="text-right col-md-2">CNS</th>
			          <th class="text-right col-md-2">VRIN-r</th>
			          <th class="text-right col-md-2">TRIN-r</th>
			          <th class="text-right col-md-2"></th>
			          <th class="text-right col-md-2"></th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td class="text-right">{{$cns}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','VRIN-r')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','TRIN-r')->first()->punteggio_grezzo}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','VRIN-r')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','TRIN-r')->first()->punteggio_grezzo}}</td>
	          		  <td class="text-right"></td>
	        		  <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','VRIN-r')->first()->percentuale_risposte}}</td>
				      <td class="text-right">{{$test->risultati->where('codice_scala','TRIN-r')->first()->percentuale_risposte}}</td>
	          		  <td class="text-right"></td>
	        		  <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>
			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			        	<th class="text-primary" colspan="7">ESAGERAZIONE</th>
			       	</tr>
			        <tr>
			          <th class="text-center col-md-1">Scala</th>
			          <th class="text-right col-md-2">F-r</th>
			          <th class="text-right col-md-2">FP-r</th>
			          <th class="text-right col-md-2">FS</th>
			          <th class="text-right col-md-2">FBS</th>
			          <th class="text-right col-md-2">RBS</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
				  <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','F-r')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','Fp-r')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','FS')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','FBS-r')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','RBS')->first()->punteggio_grezzo}}</td>
			            
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			            <td class="text-left">T</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','F-r')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','Fp-r')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','FS')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','FBS-r')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','RBS')->first()->punteggio_t}}</td>
			            <td>&nbsp;</td>
			        </tr>
			        <tr>
			            <td class="text-left">% Risp.</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','F-r')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','Fp-r')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','FS')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','FBS-r')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','RBS')->first()->percentuale_risposte}}</td>
			            <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>
				<table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			        	<th class="text-primary" colspan="7">MINIMIZZAZIONE DEI SINTOMI</th>
			       	</tr>
			        <tr>
			          <th class="text-center col-md-1">Scala</th>
			          <th class="text-right col-md-2">L-r</th>
			          <th class="text-right col-md-2">K-r</th>
			          <th class="text-right col-md-2"></th>
			          <th class="text-right col-md-2"></th>
			          <th class="text-right col-md-2"></th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
				  <tbody style="border:0 none">
			        <tr>
			            <td class="text-right">Grezzo</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','L-r')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','K-r')->first()->punteggio_grezzo}}</td>
			            <td class="text-right"></td>
			            <td class="text-right"></td>
			            <td class="text-right"></td>
			            <td>&nbsp;</td>
			        </tr>
			        <tr>
			            <td class="text-right">T</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','L-r')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','K-r')->first()->punteggio_t}}</td>
			            <td class="text-right"></td>
			            <td class="text-right"></td>
			            <td class="text-right"></td>
			            <td>&nbsp;</td>
			        </tr>
			        <tr>
			            <td class="text-right">% Risp.</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','L-r')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','K-r')->first()->percentuale_risposte}}</td>
			            <td class="text-right"></td>
			            <td class="text-right"></td>
			            <td class="text-right"></td>
			            <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>
			</div>
		</div>
      </div>
      <div class="row-fluid">
    	<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Interpretazione delle Scale Sostanziali</h3>
		  </div>

		  	<div class="table-responsive">
			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			        	<th class="text-primary" colspan="9">DISFUNZIONI SOMATICHE/COGNITIVE</th>
		        	</tr>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="text-right col-md-1"></th>
			          <th class="text-right col-md-1">RC1</th>
			          <th class="text-right col-md-1">MLS</th>
			          <th class="text-right col-md-1">GIC</th>
			          <th class="text-right col-md-1">HPC</th>
			          <th class="text-right col-md-1">NUC</th>
			          <th class="text-right col-md-1">COG</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			            <td class="text-left">Grezzo</td>
			            <td></td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','RC1')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','MLS')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','GIC')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','HPC')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','NUC')->first()->punteggio_grezzo}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','COG')->first()->punteggio_grezzo}}</td>
		              	<td>&nbsp;</td>
			        </tr>
			        <tr>
			            <td class="text-left">T</td>
			            <td></td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','RC1')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','MLS')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','GIC')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','HPC')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','NUC')->first()->punteggio_t}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','COG')->first()->punteggio_t}}</td>
		              	<td>&nbsp;</td>
			        </tr>
			        <tr>
			       		<td class="text-left">% Risp.</td>
			       		<td></td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','RC1')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','MLS')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','GIC')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','HPC')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','NUC')->first()->percentuale_risposte}}</td>
			            <td class="text-right">{{$test->risultati->where('codice_scala','COG')->first()->percentuale_risposte}}</td>
		                <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>
			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="text-primary" colspan="7">DISFUNZIONI EMOZIONALI</th>
			       	</tr>
			        <tr>
			          <th class="col-md-1 text-center">Scala</th>
			          <th class="col-md-1 text-right"></th>
			          <th class="col-md-1 text-right">EID</th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1"></th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-right">Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','EID')->first()->punteggio_grezzo}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">T</td>
			          <td></td>
  			          <td class="text-right">{{$test->risultati->where('codice_scala','EID')->first()->punteggio_t}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">% Risp.</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','EID')->first()->percentuale_risposte}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1 text-center">Scala</th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1 text-right">RCd</th>
			          <th class="col-md-1 text-right">SUI</th>
			          <th class="col-md-1 text-right">HLP</th>
			          <th class="col-md-1 text-right">SFD</th>
			          <th class="col-md-1 text-right">NFC</th>
			          <th class="col-md-1 text-right">&nbsp;</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-right">Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RCd')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SUI')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','HLP')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SFD')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','NFC')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">&nbsp;</td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">T</td>
			          <td></td>
  			          <td class="text-right">{{$test->risultati->where('codice_scala','RCd')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SUI')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','HLP')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SFD')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','NFC')->first()->punteggio_t}}</td>
			          <td class="text-right">&nbsp;</td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">% Risp.</td>
			          <td></td>
  			          <td class="text-right">{{$test->risultati->where('codice_scala','RCd')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SUI')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','HLP')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SFD')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','NFC')->first()->percentuale_risposte}}</td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1 text-center">Scala</th>
			          <th class="col-md-1 text-right"></th>
			          <th class="col-md-1 text-right">RC2</th>
			          <th class="col-md-2">&nbsp;</th>
			          <th class="col-md-2">&nbsp;</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-right">Grezzo</td>
			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC2')->first()->punteggio_grezzo}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">T</td>
  			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC2')->first()->punteggio_t}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">% Risp.</td>
			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC2')->first()->percentuale_risposte}}</td>
			          <td class="text-right"></td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1 text-center">Scala</th>
			          <th class="col-md-1 text-right"></th>
			          <th class="col-md-1 text-right">RC7</th>
			          <th class="col-md-1 text-right">STW</th>
			          <th class="col-md-1 text-right">AXY</th>
  			          <th class="col-md-1 text-right">ANP</th>
			          <th class="col-md-1 text-right">BRF</th>
			          <th class="col-md-1 text-right">MSF</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-right">Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC7')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','STW')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AXY')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','ANP')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','BRF')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','MSF')->first()->punteggio_grezzo}}</td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">T</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC7')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','STW')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AXY')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','ANP')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','BRF')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','MSF')->first()->punteggio_t}}</td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">% Risp.</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC7')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','STW')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AXY')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','ANP')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','BRF')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','MSF')->first()->percentuale_risposte}}</td>
			          <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1 text-center">Scala</th>
			          <th class="col-md-1 text-right"></th>
			          <th class="col-md-1 text-right">NEGE-r</th>
			          <th class="col-md-1 text-right">DISC-r</th>
			          <th class="col-md-1">&nbsp;</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-right">Grezzo</td>
			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','NEGE-r')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DISC-r')->first()->punteggio_grezzo}}</td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">T</td>
  			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','NEGE-r')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DISC-r')->first()->punteggio_t}}</td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-right">% Risp.</td>
			          <td class="text-right"></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','NEGE-r')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DISC-r')->first()->percentuale_risposte}}</td>
			          <td class="text-right"></td>
			          <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>
			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="text-primary" colspan="6">DISFUNZIONI DEL PENSIERO</th>
			       	</tr>
			        <tr>
			          <th class="col-md-1 text-center">Scala</th>
			          <th class="col-md-2 text-right">THD</th>
			          <th class="col-md-2 text-right">RC6</th>
			          <th class="col-md-2 text-right">RC8</th>
			          <th class="col-md-2 text-right">PSYC-r</th>
		              <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','THD')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC6')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC8')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','PSYC-r')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','THD')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC6')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC8')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','PSYC-r')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','THD')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC6')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC8')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','PSYC-r')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="text-primary" colspan="4">DISFUNZIONI COMPORTAMENTALI</th>
			       	</tr>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1 text-right">BXD</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td>Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','BXD')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td>T</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','BXD')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td>% Risp.</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','BXD')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        </tr>
			      </tbody>
			    </table>

				<table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1 text-right">RC4</th>
			          <th class="col-md-3 text-right">JCP</th>
			          <th class="col-md-3 text-right">SUB</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC4')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','JCP')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SUB')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC4')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','JCP')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SUB')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC4')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','JCP')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SUB')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

				<table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1 text-right">RC9</th>
			          <th class="col-md-3 text-right">AGG</th>
			          <th class="col-md-3 text-right">ACT</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC9')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AGG')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','ACT')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC9')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AGG')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','ACT')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC9')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AGG')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','ACT')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="col-md-1"></th>
			          <th class="col-md-1 text-right">AGGR-r</th>
			          <th class="col-md-3 text-right">DISC-r</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AGGR-r')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DISC-r')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AGGR-r')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DISC-r')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td></td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AGGR-r')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DISC-r')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			        <tr>
			          <th class="text-primary" colspan="8">FUNZIONAMENTO INTERPERSONALE</th>
			       	</tr>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="text-right">FML</th>
			          <th class="text-right">RC3</th>
			          <th class="text-right">IPP</th>
			          <th class="text-right">SAV</th>
			          <th class="text-right">SHY</th>
			          <th class="text-right">DSF</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','FML')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC3')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','IPP')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SAV')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SHY')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DSF')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','FML')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC3')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','IPP')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SAV')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SHY')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DSF')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','FML')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','RC3')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','IPP')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SAV')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','SHY')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','DSF')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			    <table class="table table-list table-bordered-horizontal table-striped text-right">
			      <thead>
			      	<tr>
			          <th class="text-primary" colspan="4">INTERESSI</th>
			       	</tr>
			        <tr>
			          <th class="col-md-1">Scala</th>
			          <th class="col-md-2 text-right">AES</th>
			          <th class="col-md-3 text-right">MEC</th>
			          <th>&nbsp;</th>
			        </tr>
			      </thead>
			      <tbody style="border-bottom: 0 none">
			        <tr>
			          <td class="text-left">Grezzo</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AES')->first()->punteggio_grezzo}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','MEC')->first()->punteggio_grezzo}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">T</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AES')->first()->punteggio_t}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','MEC')->first()->punteggio_t}}</td>
		              <td>&nbsp;</td>
			        </tr>
			        <tr>
			          <td class="text-left">% Risp.</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','AES')->first()->percentuale_risposte}}</td>
			          <td class="text-right">{{$test->risultati->where('codice_scala','MEC')->first()->percentuale_risposte}}</td>
		              <td>&nbsp;</td>
			        </tr>
			      </tbody>
			    </table>

			</div>

		</div>
      </div>
    @endif
  	<div class="row">
    	<br>
  	</div>   
</div>





