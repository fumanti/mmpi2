@foreach( $gruppo_risposte->slice(0,5) as $risposta)  
<div class="btn-group btn-group-xs" role="group">  
  <div class="input-group input-group-sm">
    <span class="input-group-addon ph">
    {{$risposta->item_id}}
    </span>
    <input name="item_id{{$risposta->item_id}}" type="text" class="form-control input-xs ph" maxlength="1" value="@if(strlen($risposta->valore)==0) 0 @elseif($risposta->valore==1) 1 @else 2 @endif" aria-describedby="sizing-addon3" @if($risposta->test->counter && !$risposta->test->counter->can_edit()) disabled="true" @endif >
  </div>
</div>
@endforeach
<div class="clearfix visible-xs-block"></div>
@foreach( $gruppo_risposte->slice(5,5) as $risposta)
<div class="btn-group btn-group-xs" role="group">  
  <div class="input-group input-group-sm">
    <span class="input-group-addon ph">
    {{$risposta->item_id}}
    </span>
    <input name="item_id{{$risposta->item_id}}" type="text" class="form-control input-xs ph" maxlength="1" value="@if(strlen($risposta->valore)==0) 0 @elseif($risposta->valore==1) 1 @else 2 @endif" aria-describedby="sizing-addon3" @if($risposta->test->counter && !$risposta->test->counter->can_edit()) disabled="true" @endif >
  </div>
</div>
@endforeach
<div class="clearfix visible-md-block visible-sm-block visible-xs-block"></div>
@foreach( $gruppo_risposte->slice(10,5) as $risposta)
<div class="btn-group btn-group-xs" role="group">  
  <div class="input-group input-group-sm">
    <span class="input-group-addon ph">
    {{$risposta->item_id}}
    </span>
    <input name="item_id{{$risposta->item_id}}" type="text" class="form-control input-xs ph" maxlength="1" value="@if(strlen($risposta->valore)==0) 0 @elseif($risposta->valore==1) 1 @else 2 @endif" aria-describedby="sizing-addon3" @if($risposta->test->counter && !$risposta->test->counter->can_edit()) disabled="true" @endif >
  </div>
</div>
@endforeach
@foreach( $gruppo_risposte->slice(15,5) as $risposta)
<div class="btn-group btn-group-xs" role="group">  
  <div class="input-group input-group-sm">
    <span class="input-group-addon ph">
    {{$risposta->item_id}}
    </span>
    <input name="item_id{{$risposta->item_id}}" type="text" class="form-control input-xs ph" maxlength="1" value="@if(strlen($risposta->valore)==0) 0 @elseif($risposta->valore==1) 1 @else 2 @endif" aria-describedby="sizing-addon3" @if($risposta->test->counter && !$risposta->test->counter->can_edit()) disabled="true" @endif >
  </div>
</div>
@endforeach        




