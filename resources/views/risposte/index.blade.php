

  <div class="container-fluid" style="margin-left:8px">
      <div class="row">
          <br>
      </div>
      @if(Auth::user()->has_max_test())  
      <div class="row {{$test->counter->first_time()?'hidden':''}}" id="row_counter">
        @if($test->counter && $test->counter->can_edit())
            <span>Modifiche consentite</span>&nbsp;<span id="modifiche" class="badge danger">{{10 - $test->counter->correzioni}}</span><br/><br/>
        @else
          <span class="label label-default">Il test non è più modificabile.</span><br/><br/>
        @endif
      </div>
      @endif
      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(0,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(20,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(40,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(60,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(80,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(100,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(120,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(140,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(160,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(180,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(200,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(220,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(240,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(260,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(280,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(300,20)])
      </div>

      <div class="row">
        @include('risposte.alt-form', ['gruppo_risposte' => $risposte->slice(320,18)])
      </div>
      <div class="row">
        <br>
      </div>   
</div>



