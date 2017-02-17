<div><b><span class="text-uppercase">{{$test->cognome}}</span> {{$test->nome}}&nbsp;@if($test->sesso[0]=='M') <span class="fa fa-mars"></span> @elseif ($test->sesso[0]=='F') <span class="fa fa-venus"></span>@endif</b></div>
<div>Data compilazione: {{ $test->data_somministrazione}}</div>



