
@foreach( $gruppo_risposte->slice(0,5) as $risposta)  
    <div class="btn-group btn-group-xs" role="group" style="padding-bottom:4px">  
      <div class="select dropdown">
        <button class="btn btn-action btn-info btn-xs readonly" onclick="return false;" data-toggle="dropdown" style="text-align:right;margin-right:-8px;min-width:35px;padding-left:0px;padding-right:8px;font-size:12px">
          {{$risposta->item_id}}
        </button>
        <button id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" style="min-width:28px;padding-left:8px;padding-right:8px;font-size:12px">
          <span data-bind="label">@if($risposta->valore == true) 1 @elseif(is_null($risposta->valore)) 0 @else 2 @endif</span>
        </button>
        <ul class="dropdown-menu ddRisposte" aria-labelledby="dLabel" style="min-width:80px;text-align:right">
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('1');">1</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('0');">2</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('');">0</a></li>
        </ul>
      </div>
      {!! Form::hidden('id', $risposta->id) !!}
      {!! Form::hidden('valore', $risposta->valore) !!}
    </div>
@endforeach
<div class="clearfix visible-xs-block"></div>
@foreach( $gruppo_risposte->slice(5,5) as $risposta)  
    <div class="btn-group btn-group-xs" role="group" style="padding-bottom:4px">  
      <div class="select dropdown">
        <button class="btn btn-action btn-info btn-xs readonly" onclick="return false;" data-toggle="dropdown" style="text-align:right;margin-right:-8px;min-width:35px;padding-left:0px;padding-right:8px;font-size:12px">
          {{$risposta->item_id}}
        </button>
        <button id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" style="min-width:28px;padding-left:8px;padding-right:8px;font-size:12px">
          <span data-bind="label">@if($risposta->valore == true) 1 @elseif(is_null($risposta->valore)) 0 @else 2 @endif</span>
        </button>
        <ul class="dropdown-menu ddRisposte" aria-labelledby="dLabel" style="min-width:80px;text-align:right">
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('1');">1</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('0');">2</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('');">0</a></li>
        </ul>
      </div>
      {!! Form::hidden('id', $risposta->id) !!}
      {!! Form::hidden('valore', $risposta->valore) !!}
    </div>
@endforeach
<div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>
@foreach( $gruppo_risposte->slice(10,5) as $risposta)  
    <div class="btn-group btn-group-xs" role="group" style="padding-bottom:4px">  
      <div class="select dropdown">
        <button class="btn btn-action btn-info btn-xs readonly" onclick="return false;" data-toggle="dropdown" style="text-align:right;margin-right:-8px;min-width:35px;padding-left:0px;padding-right:8px;font-size:12px">
          {{$risposta->item_id}}
        </button>
        <button id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" style="min-width:28px;padding-left:8px;padding-right:8px;font-size:12px">
          <span data-bind="label">@if($risposta->valore == true) 1 @elseif(is_null($risposta->valore)) 0 @else 2 @endif</span>
        </button>
        <ul class="dropdown-menu ddRisposte" aria-labelledby="dLabel" style="min-width:80px;text-align:right">
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('1');">1</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('0');">2</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('');">0</a></li>
        </ul>
      </div>
      {!! Form::hidden('id', $risposta->id) !!}
      {!! Form::hidden('valore', $risposta->valore) !!}
    </div>
@endforeach
<div class="clearfix visible-xs-block"></div>
@foreach( $gruppo_risposte->slice(15,5) as $risposta)  
    <div class="btn-group btn-group-xs" role="group" style="padding-bottom:4px">  
      <div class="select dropdown">
        <button class="btn btn-action btn-info btn-xs readonly" onclick="return false;" data-toggle="dropdown" style="text-align:right;margin-right:-8px;min-width:35px;padding-left:0px;padding-right:8px;font-size:12px">
          {{$risposta->item_id}}
        </button>
        <button id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" style="min-width:28px;padding-left:8px;padding-right:8px;font-size:12px">
          <span data-bind="label">@if($risposta->valore == true) 1 @elseif(is_null($risposta->valore)) 0 @else 2 @endif</span>
        </button>
        <ul class="dropdown-menu ddRisposte" aria-labelledby="dLabel" style="min-width:80px;text-align:right">
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('1');">1</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('0');">2</a></li>
          <li><a href="#" onclick="$(this).closest('.dropdown').find('span[data-bind=label]').text($(this).text());$(this).closest('.btn-group').find(':hidden[name=valore]').val('');">0</a></li>
        </ul>
      </div>
      {!! Form::hidden('id', $risposta->id) !!}
      {!! Form::hidden('valore', $risposta->valore) !!}
    </div>
@endforeach        




