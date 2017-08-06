@foreach($validita["Sezioni"]["I"]["Sottosezioni"] as $s)
	<br/>
	<h1>{{$s["Sottosezione"]}} &nbsp;&minus;&nbsp; {{$s["messaggio"]}}</h1>
	@foreach($s["Fonti"] as $gruppi)
		@foreach($gruppi as $key => $value)
			<br>
 			<h2> {{$key}} &nbsp;&minus;&nbsp; Punteggio: {{$value["punteggio"]}} Validità: {{$value["risultato"]}} </h2>
 			<br>
			<p>Minacce: <ul>@foreach($value["minacce"] as $m)<li>{{$m}}</li>@endforeach</ul><br></p>
			<p>Motivo: <ul>@foreach($value["motivo"] as $m)<li>{{$m}}</li>@endforeach</ul><br></p>
			<p>Implicazioni : <ul>@foreach($value["implicazioni"] as $i)<li>{{$i}}</li>@endforeach</ul><br></p> 
		@endforeach
	@endforeach
@endforeach




