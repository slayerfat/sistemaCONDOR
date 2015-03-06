$(function(){
  $('.mediano > strong').each(function(){
    $(this).html().formatter({
      'pattern': '{{999}}.{{999}},{{999999}}'
    });
  });
});
