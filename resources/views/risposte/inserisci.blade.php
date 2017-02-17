/* @extends('app')
* 
* @section('content')
* 
* <div>
*   <!-- Nav tabs -->
*   <ul class="nav nav-pills" role="tablist">
*     <li role="presentation" class="active"><a href="#1-26" aria-controls="home" role="tab" data-toggle="tab">1 - 26</a></li>
*     <li role="presentation"><a href="#27-52" aria-controls="profile" role="tab" data-toggle="tab">27 - 52</a></li>
*     <li role="presentation"><a href="#53-78" aria-controls="messages" role="tab" data-toggle="tab">53 - 78</a></li>
*     <li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">79 - 104</a></li>
*     <li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">105 - 130</a></li>
*     <li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">131 - 156</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">157 - 182</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">183 - 208</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">209 - 234</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">235 - 260</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">261 - 286</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">287 - 312</a></li>    
* 	<li role="presentation"><a href="#79-104" aria-controls="settings" role="tab" data-toggle="tab">313 - 338</a></li>   
*   </ul>
* 
*   <!-- Tab panes -->
*   <div class="tab-content">
*     <div role="tabpanel" class="tab-pane active" id="1-26">
*     	<div class="container">
*     	 	<p autofocus="">Domande da 1 a 26</p>
*     	</div>
*     </div>
*     <div role="tabpanel" class="tab-pane" id="27-52">
*     	Domande da 27 a 52
*     </div>
*     <div role="tabpanel" class="tab-pane" id="53-78"> 
*     	Domande da 53 a 78 
*     </div>
*     <div role="tabpanel" class="tab-pane" id="79-104"> 
*     	Domande da 79 a 104 
*     </div>
*   </div>
* 
* </div>
* <script>
* $('#myTabs a').click(function (e) {
*   e.preventDefault()
*   $(this).tab('show')
*   $(this).tab('blur')
* })
* </script>
*/ @endsection