function setOwner(owner)
{
	$('#owner span[data-bind="label"]').text(owner=='all'?'Tutti i test':'I miei test');
  	if(owner == 'all'){
	  	$('li:Has(#all)').attr('class','disabled');$('li:Has(#user)').removeAttr('class');
  	} else {
  		$('li:Has(#user)').attr('class','disabled');$('li:Has(#all)').removeAttr('class');
  	}
}

function getList(url, sort){
  console.log($('#owner span[data-bind="label"]').text());
  if(sort === undefined){
    sort_id = $('#testtable thead a span[class!="fa fa-sort"]').closest('a').attr('id');
    dir = $('#testtable thead a span[class!="fa fa-sort"]').attr("class").replace('fa fa-sort-', '');
  } else {
    sort_id = sort; //.id;
    dir = $(document.getElementById(sort)).find('span').attr("class").replace('fa fa-sort-', '');
  }
  
  $.ajax({
    url: url === undefined ? '/test/?page=1' : url,
    type: "post",
      data: {
        'owner': ($('#owner span[data-bind="label"]').text()=='Tutti i test')?'all':'user',
        'search': $('#txtSearch').val(),
        'sort' : sort_id,
        'dir' : dir,
        '_token': $('input[name=_token]').val()
      }
      ,success: function(lista_test){
          $('#lista_test').html(lista_test);
          changeIcons(sort_id, dir);
      },
      fail: function(){
        document.location.href='/';
      },
      error: function(){
        document.location.href='/';
      }
  });
};

function changeIcons(id, dir) {
  var span = $(document.getElementById(id)).find('span');
  span.removeAttr("class");
  span.addClass("fa fa-sort-"+dir);
}

$(function(){

	// setOwner("{{ session('owner') }}");

    $(document.body).on('click', '#menu_test li', function(event) {  
	  setOwner(event.target.id);
	  // getList();
    });
    
    $(document).ready(function(event) {
	  if($('#testtable thead a.sort span[class!="fa fa-sort"]').attr('id')===undefined){
	  	changeIcons('id', 'asc');
	  }
    });

	$(document.body).on( 'click', '#search', function( event ) {
		$('#txtSearch').focus();
    });

	$(document.body).on( 'keyup', '#txtSearch', function( event ) {
	 	if(event.which==13){
 			event.preventDefault();
		} else {
			getList();
	  	}
    });

    $(document.body).on('click', '.pagination a', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');
        getList(url);
    });

    $(document.body).on('click', '#testtable thead a.sort', function(e) {
        e.preventDefault();
        
        var span = $(e.target).find('span');
        var dir = span.attr("class").includes('asc') ? 'desc' : 'asc';
        span.removeAttr("class").addClass("fa fa-sort-"+dir);

        getList(null, e.target.id);
    });
 });