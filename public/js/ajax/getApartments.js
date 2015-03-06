$(function() {
  if ($('#building_id').val() !== 0) {
    $.ajax({
      url: '/edificios/apartments/'+$('#building_id').val(),
      type: 'GET',
    })
    .done(function(data) {
      if (data) {
        $('#apartment_id').empty();
        $('#apartment_id').append(
          '<option>Seleccionar</option>');
        for (var i = 1; i <= data; i++) {
          $('#apartment_id').append(
            '<option value="'+i+'">Apartamento '+i+'</option>');
        }
      }
    });

  }

  $('#building_id').on('change', function() {
    $('#apartment_id').empty();
    $('#apartment_id').append(
      '<option>Seleccionar</option>');
    if ($('#building_id').val() !== 0) {
      $.ajax({
        url: '/edificios/apartments/'+$(this).val(),
        type: 'GET',
      })
      .done(function(data) {
        if (data) {
          for (var i = 1; i <= data; i++) {
            $('#apartment_id').append(
              '<option value="'+i+'">Apartamento '+i+'</option>');
          }
        }
      });
    }
  });
});
