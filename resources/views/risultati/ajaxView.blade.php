<ul>
  @foreach ($risultati as $risultato)
  <li>
    <div>
        <span>{{ $risultato->codice_scala }}</span>
        <span>{{ $risultato->punteggio_grezzo }}</span>
        <span>{{ $risultato->punteggio_grezzo }}</span>
    </div>
  </li>
  @endforeach
</ul>