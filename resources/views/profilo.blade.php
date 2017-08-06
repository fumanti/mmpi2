
@foreach($risultato as $r)
<br>
<br>
<br>
<span><h1> {{$r["scala"]}}</h1> {{$r["punteggio"]}} </span>
<br>
<p>Personalit&agrave;:<br> <ul>@foreach($r["personalita"] as $p)<li>{{$p}}</li>@endforeach</ul></p>
<br>
<p>Correlati:<br> <ul>@foreach($r["correlati"] as $c)<li>{{$c}}</li>@endforeach</ul></p>
<br>
<p>Diagnosi :<br> <ul>@foreach($r["diagnosi"] as $d)<li>{{$d}}</li>@endforeach</ul></p>
<br>
<p>Trattamento :<br> <ul>@foreach($r["trattamento"] as $t)<li>{{$t}}</li>@endforeach</ul></p>
<p></p>
@endforeach