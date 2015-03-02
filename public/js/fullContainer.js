$(function() {
  var alto  = $(window).height();
  var ancho = $(window).width();

  var navbar = $('.navbar').height() +
                parseInt($('.navbar').css('margin-bottom')) +
                parseInt($('.navbar').css('padding-bottom')) + 2;

  alto = alto - navbar;

  if($(".full").height() < alto){
    $(".full").height(alto);
    $('.status').css({
      'margin-top': ($(".full").height()/2)-($('.status').height()/2)
    });
  }
});
