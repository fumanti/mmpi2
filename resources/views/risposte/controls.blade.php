@foreach($controls as @risposta)
  <div class="btn-group btn-group-xs" role="group" style="margin-bottom:4px">  
    <div class="select dropdown">
      <button class="btn btn-action btn-info btn-sm readonly" onclick="return false;" data-toggle="dropdown" style="text-align:right;margin-right:-8px;min-width:35px;padding-left:0px;padding-right:8px;font-size:12px">
        {{$risposta->item_id}}  <!-- {{ str_pad( $risposta->item_id, 3, "0", STR_PAD_LEFT) }} -->
      </button>
      <button id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-sm dropdown-toggle" style="min-width:28px;padding-left:8px;padding-right:8px;font-size:12px">
        <span data-bind="label">@if($risposta->valore == true) V @elseif(is_null($risposta->valore)) &nbsp;&nbsp; @else F @endif</span>
      </button>
      <ul class="dropdown-menu ddRisposte" aria-labelledby="dLabel" style="min-width:80px;text-align:right">
        <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('V');">V</a></li>
        <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('F');">F</a></li>
        <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('');">&nbsp;&nbsp;</a></li>
      </ul>
    </div>
    {!! Form::hidden('id', $risposta->id) !!}
    {!! Form::hidden('valore', $risposta->valore) !!}
  </div>
@endforeach