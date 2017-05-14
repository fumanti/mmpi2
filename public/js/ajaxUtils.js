/*var test = {};

test.getList = function(url, sort){
  console.log($('#owner span[data-bind="label"]').text());
  if(sort === undefined){
    sort_id = $('#testtable thead a span[class!="fa fa-sort"]').closest('a').attr('id');
    dir = $('#testtable thead a span[class!="fa fa-sort"]').attr("class").replace('fa fa-sort-', '');
  } else {
    sort_id = sort; //.id;
    dir = $(document.getElementById(sort)).find('span').attr("class").replace('fa fa-sort-', '');
  }
  
  $.ajax({
    url: url === undefined ? '/test' : url,
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
          test.changeIcons(sort_id, dir);
      },
      fail: function(){
        document.location.href='/';
      },
      error: function(){
        document.location.href='/';
      }
  });
};

test.changeIcons = function(id, dir) {
  var span = $(document.getElementById(id)).find('span');
  span.removeAttr("class");
  span.addClass("fa fa-sort-"+dir);
}

*/