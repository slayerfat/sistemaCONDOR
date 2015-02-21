$("document").ready(function(){

  var id = $('#parish_id').val();

  $('#parish_id').empty();

  var municipioId, estadoId;

  $.ajax({
    type: 'GET', 
    dataType: "json",
    url: '/parroquia/'+id,
    data: null,
    success: function (datos){
      municipioId = datos[0].town_id;
      // se chequea entre los datos recibidos (json)
      $.each(datos, function(index, parroquia) {
        if (id === parroquia.id) 
        {
          $('#parish_id').append(
            '<option value="'+parroquia.id+'" selected="selected">'+parroquia.description+'</option>');
        }
        else
        {
          $('#parish_id').append(
          '<option value="'+parroquia.id+'">'+parroquia.description+'</option>');
        }
      }); //fin del each
      $.ajax({
        type: 'GET', 
        dataType: "json",
        url: '/municipio/'+municipioId,
        data: null,
        success: function (datos){
          estadoId = datos[0].state_id;
          $('#town_id').empty();
          $.each(datos, function(index, municipio) {
            if (municipioId === municipio.id) {
              $('#town_id').append(
                '<option value="'+municipio.id+'" selected="selected">'+municipio.description+'</option>');
            }
            else
            {
              $('#town_id').append(
                '<option value="'+municipio.id+'">'+municipio.description+'</option>');
            }
          }); // fin del each
          $.ajax({
            type: 'GET', 
            dataType: "json",
            url: '/estados',
            data: null,
            success: function (datos){
              $('#state_id').empty();
              $.each(datos, function(index, estado) {
                if (estadoId === estado.id) {
                  $('#state_id').append(
                    '<option value="'+estado.id+'" selected="selected">'+estado.description+'</option>');
                }
                else
                {
                  $('#state_id').append(
                    '<option value="'+estado.id+'">'+estado.description+'</option>');
                }
              });
            }
          });
        }
      });
    }
  });

  $("#state_id").change(function(){

    var id = $("#state_id").val();

    $.ajax({
      type: 'GET', 
      dataType: "json",
      url: '/municipios/'+id,
      data: null,
      success: function (datos){
        // se borran los municipios existentes
        $('#town_id').empty();
        // se chequea entre los datos recibidos (json)
        $.each(datos, function(index, municipio) {
          $('#town_id').append(
            '<option value="'+municipio.id+'">'+municipio.description+'</option>');
        });
        $('#parish_id').empty();
      }
    });
  });

  $("#town_id").change(function(){

    var id = $("#town_id").val();

    $.ajax({
      type: 'GET', 
      dataType: "json",
      url: '/parroquias/'+id,
      data: null,
      success: function (datos){
        $('#parish_id').empty();
        $.each(datos, function(index, municipio) {
          $('#parish_id').append(
            '<option value="'+municipio.id+'">'+municipio.description+'</option>');
        });
      }
    });
  });
});
