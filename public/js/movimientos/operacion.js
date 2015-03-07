$(function(){
  numeral.language('es');
  $('.parse_numero').each(function(){
    var valor = parseInt($(this).html());
    var parsed = numeral(valor).format('0,0.0000');
    $(this).html('Bs '+parsed);
  });
});
