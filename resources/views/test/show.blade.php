@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
	    <ul class="breadcrumb">
	        <li><a href="{{ url('/') }}">Home</a></li>
	        <li><a href="{{ session('owner')=='all' ? url('/test/all') : url('/test') }}">Test eseguiti</a></li>
	        <li class="active"><a id="dettaglio_test" href="{{ url('test/'.$test->id) }}">Dettaglio test</a></li>
	    </ul>
	</div>
	<div class="row-fluid">
		{!! Form::open() !!}
		<div class="panel panel-default">
		  	<div class="panel-body">
			  	<div id="header" class="well">
			  		<div class="pull-right" style="text-align:right; vertical-align:top"><a id="toEditTest" class="btn" href="{{ url('test/'.$test->id.'/edit') }}"><i class="fa fa-pencil"></i>&nbsp;Modifica dati</a></div>
			  	  	<div id="header_data"> @include('test/header', ['test'=>$test]) </div>  	
			  	</div> 
				<br>
				<ul id="testTabs" class="nav nav-tabs nTabs">
					 <li role="presentation" class="{{$test->risultati->count()>0?'active':'hidden'}}"><a href="#risultati">Risultati</a></li>
			  		 <li role="presentation" class="{{$test->risultati->count()>0?'':'hidden'}}"><a href="#item_critici">Item critici</a></li>
				  	 <li role="presentation" class="{{$test->risultati->count()==0?'active':''}}"><a href="#risposte">Risposte</a></li>
				   	 @if(!$test->counter || $test->counter->can_correct())<a id="calcolaRisultati" href="#" class="btn btn-primary btn-xs pull-left" style="padding:9px;margin-top:2px;margin-left:2px;"><i class="glyphicon glyphicon-{{$test->risultati->count()==0?'flash':'refresh'}}"></i> &nbsp; Calcola Risultati &nbsp;&nbsp; <span class="badge" id="correzioni" data-toggle="tooltip" data-placement="top" title="Correzioni a disposizione">{{$test->counter ? 3 - $test->counter->calcoli : ''}}</span></a>@endif
				   	 <!--<a id="salva_risposte" href="#" class="btn btn-primary btn-xs pull-left" style="padding:9px;margin-top:2px;margin-left:2px;"><i class="fa fa-floppy-o"></i> &nbsp; Salva risposte</a>-->
				   	 
				   	 <!--<a id="calcolaRisultati" href="#" class="btn btn-primary btn-xs pull-left" style="padding:9px;margin-top:2px;margin-left:2px;display:{{ $test->risposte->where('valore','!=', null)->count()==0 ? 'none' : 'visible' }}"><i class="glyphicon glyphicon-{{$test->risultati->count()==0?'flash':'refresh'}}"></i> &nbsp; {{$test->risultati->count()==0?'C':'Ric'}}alcola Risultati </a>-->
				</ul>
				<div class="tab-content">
			  		<div class="{{$test->risultati->count()>0?'tab-pane active':'tab-pane'}}" id="risultati">
			  		 @include('risultati/index', ['test'=>$test, 'gruppi_scale'=>$gruppi_scale, 'scale'=>$scale, 'cns' => '$cns'])
			  		</div>
			  		<div class="tab-pane" id="item_critici">
			  		 @include('risultati/item_critici' , ['test'=>$test, 'scale'=>$scale, 'item_critici'=>$item_critici])
			  		</div>
			  		<div class="{{$test->risultati->count()==0?'tab-pane active':'tab-pane'}}" id="risposte">
			  		 @include('risposte/index', ['test'=> $test, 'risposte' => $risposte])
			  		</div>
				</div>
				{!! Form::hidden('test_id', $test->id) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')
<script src="../../js/jquery.blockUI.js"></script>
<script type="text/javascript">

	$(document).ready(function (){
		$('input[type=text].ph:first').select().focus();
		$('[data-toggle="tooltip"]').tooltip();
	});

  	$('.nTabs a').click(function (e) {
  		e.preventDefault();
  		$(this).tab('show');
  		$('input[type=text].ph:first').select().focus();
	})


    $('#salva').click(function() { 
        // update the block message 
        $.blockUI(); 
        
        $.ajax({ 
            url: 'paziente', 
            type: "post",
            data: {
        		'id': $('#test_id').val(),
        		'nome': $('#nome').val(),
        		'cognome': $('#cognome').val(),
        		'data_nascita':$('#data_nascita').val(),
        		'sesso':$('[name=sesso]').find(':selected').val(),
        		'data_somministrazione':$('#data_somministrazione').val(),
        		'_token': $('input[name=_token]').val()
            }, 	
            success: function(test) { 
                // unblock when remote call returns 
                $("#header_data").html(test);
                $.unblockUI();
            } 
        });
        return false; 
    }); 

    $('#chiudi').click(function() { 
        $.unblockUI(); 
        return false; 
    });

	$(('.input-group-addon.ph')).bind("click", function(e) {
		$(this).closest('.btn-group').find('input:text.ph').select().focus();
	});

	$(('input:text.ph')).bind("click", function(e) {
		$(this).select();
	});

	$('input:text.ph').keypress(function (e) {
      if (e.keyCode == 9 || e.which == 13 || (e.which >= 48 && e.which <= 50)) {
        if((e.which == 48 || e.which == 49 || e.which == 50)){
			$(this).val(String.fromCharCode(e.which));
			$_token = "{{ csrf_token() }}";
			$test_id = "{{ $test->id }}";
			$item_id = $('input:text.ph').index($(this))+1;
			$valore = $(this).val();
			sendAnswer();
        	setNext($(this)); 
    	}
    	else if (e.which == 13) {
			$_token = "{{ csrf_token() }}";
			$test_id = "{{ $test->id }}";
			$item_id = $('input:text.ph').index($(this))+1;
			$valore = $(this).val();
			sendAnswer();
    		setNext($(this));	
    	}
      } else {
      	return false;
      }
   });

	$('#salva_risposte').bind("click", function(e) {
		e.preventDefault();
		sendAnswers();
	});

	function sendAnswer(){
		$.ajax({
		    url: 'risposte',
		    type: "post",
		    data: {'test_id':$test_id, 'item_id':$item_id, 'valore':$valore, '_token':$_token}
		    ,success: function(result){
	    		if (result==0){
	    			$('input:text.ph').attr('disabled','true');
	    		} else {
	    			$('input:text.ph').removeAttr('disabled');
	    		}
	    		$('#modifiche').html(result);
		    }
		}); 		
	}
 
	function sendAnswers(){
		$.blockUI({message:'<h4><i class="fa fa-cog fa-spin"></i>&nbsp;Salvataggio in corso ...</h4>'});
		$('#testTabs a[href=#risposte]').tab('show').closest('li').show().attr('class','active');
		var data = $("form").serialize();
		$.ajax({
		    url: 'risposte',
		    type: "post",
		    data: data 
		    ,success: function(){
				$.growlUI(null, '<i class="fa fa-check fa-2x"></i>&nbsp;Risposte salvate!');
				$('#calcolaRisultati').show();
		  	}
  		}); 
	}

	function refreshAnswerPage(){
		$_token = "{{ csrf_token() }}";
		$test_id = "{{ $test->id }}";
		$item_id = null;
		$valore = null;
		// $.ajax({
		//     url: 'risposte',
		//     type: "post",
		//     data: {'test_id':$test_id, 'item_id':$item_id, 'valore':$valore, '_token':$_token}
		//     ,success: function(result){
	 //    		$('#risposte').html(result);
		//     }
		// }); 		
		sendAnswer();
	}

	function getCounter(){
		$_token = "{{ csrf_token() }}";
		$test_id = "{{ $test->id }}";
		
		$.ajax({
		    url: 'counter',
		    type: "post",
		    data: {'test_id':$test_id, '_token':$_token}
		    ,success: function(result){
	    		if(result['calcoli']==3) {
	    			$('#calcolaRisultati').hide();
	    			$('#row_counter').html('<span class="label label-default">Il test non è più modificabile.</span><br/><br/>');
	    		} else {
	    			if(result['correzioni']<10){
	    				$('input:text.ph').removeAttr('disabled');
	    				$('#row_counter').html('<span>Modifiche consentite</span>&nbsp;<span id="modifiche" class="badge">10</span><br/><br/>');
	    			}
	    			$('#row_counter').removeClass('hidden');
	    			$('#modifiche').html(10 - result['correzioni']);
	    			$('#correzioni').html(3 - result['calcoli']);
	  
	    		}
		    }
		});
	}

	function getResults(){
	  $.blockUI();
	  $.ajax({
	    url: 'risultati',
	    type: "post",
        data: {
          'test_id': $('input[name=test_id]').val(),
          '_token': $('input[name=_token]').val()
        }
        ,success: function(risultati){
          setTimeout($.unblockUI(), 2000);
          $('#risultati').html(risultati);		  
          $('#testTabs a[href=#risultati]').tab('show').closest('li').show().attr('class','active');
          getItemCritici();
          $.growlUI(null, '<i class="fa fa-check fa-2x"></i>&nbsp;Risultati salvati!'); 
        }
	  });
	}

	function getItemCritici(){
		$.ajax({
	    url: 'item_critici',
	    type: "post",
        data: {
          'test_id': $('input[name=test_id]').val(),
          '_token': $('input[name=_token]').val()
        }
        ,success: function(item_critici){
          $('#item_critici').html(item_critici);		  
          $('#testTabs a[href=#item_critici]').closest('li').show().attr('class','');
        }
	  });
	}

	function setNext(e){
		var $n = $('input:text.ph').length;
  		$nextIndex = $('input:text.ph').index(e)+1;
  		if($nextIndex < $n) {
			$('input:text.ph')[$nextIndex].focus();
			//$('input:text.ph')[$nextIndex].select();
      	} else {
  			$('input:text.ph:first')[$nextIndex].focus();
  			//$('input:text.ph:first')[$nextIndex].select();
       	}
	}

  	$('#calcolaRisultati').click(function(event){
  	  event.preventDefault();
  	  $.blockUI();
  	  getResults();
  	  if("{{Auth::user()->has_max_test()}}"){
  	  	getCounter();
	  }
  	});

 	$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {
	  // if($(event.target).text()==$(event.target).closest('.btn-group').find('[data-bind="label"]').text()){
	  // 	return false;
   	  //    }
      $(event.target).closest('.btn-group').find('[data-bind="label"]').text($(event.target).text());
      $.blockUI();
	  $.ajax({
	    url: 'risultati',
	    type: "post",
        data: {
          'test_id': $('input[name=test_id]').val(),
          'ordinamento': $(event.target).attr('id'),
          '_token': $('input[name=_token]').val()
        }
        ,success: function(risultati){
          $('#risultati').html(risultati);
          $.unblockUI();
        }
	  });
    });
</script>
@endsection