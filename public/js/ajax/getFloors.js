$(function() {
  if ($('#building_id').val() !== 0) {
    var floor = $('#floor').val();
    $.ajax({
      url: '/edificios/floors/'+$('#building_id').val(),
      type: 'GET',
    })
    .done(function(data) {
      if (data) {
        $('#floor').empty();
        for (var i = 1; i <= data; i++) {
          if (i == floor) {
            $('#floor').append(
              '<option value="'+i+'" selected="selected"> Piso '+i+'</option>');
          } else{
            $('#floor').append(
              '<option value="'+i+'"> Piso '+i+'</option>');
          }
        }
      }
    });

  }

  $('#building_id').on('change', function() {
    $('#floor').empty();
    $('#floor').append(
      '<option value="">Seleccionar</option>');
    if ($('#building_id').val() !== 0) {
      $.ajax({
        url: '/edificios/floors/'+$(this).val(),
        type: 'GET',
      })
      .done(function(data) {
        if (data) {
          for (var i = 1; i <= data; i++) {
            $('#floor').append(
              '<option value="'+i+'"> Piso '+i+'</option>');
          }
        }
      });
    }
  });
});
