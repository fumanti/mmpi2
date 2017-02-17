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
                @if($test->risultati->where('codice_scala',$scala->codice)->count()) 
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