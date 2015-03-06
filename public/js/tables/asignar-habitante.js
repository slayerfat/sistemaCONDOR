// http://bootstrap-table.wenzhixin.net.cn/examples/#select
function actionFormatter(value, row, index) {
  return [
    '<a class="habitante" href="javascript:void(0)" title="Incluir como habitante">',
    '<i class="glyphicon glyphicon-ok"></i>',
    '</a>',
    '<a class="eliminar ml10" href="javascript:void(0)" title="Remover como habitante">',
    '<i class="glyphicon glyphicon-remove"></i>',
    '</a>'
  ].join('');
}

window.actionEvents = {
  'click .habitante': function (e, value, row, index) {
    if (confirm('Por favor confirme adicion de habitante.')) {
      insertarHabitante(index, row.cedula);
    }
  },
  'click .eliminar': function (e, value, row, index) {
    if (confirm('Por favor confirme.')) {
      eliminarHabitante(index, row.cedula);
    }
  }
};

function insertarHabitante(index, cedula){
  var apartamento = parseInt($('#numero_apartamento').html());
  $.ajax({
    url: '/habitantes/'+cedula+'/'+apartamento,
    type: 'GET',
  })
  .fail(function() {
    $('tr[data-index="'+index+'"]').css(
      {'background-color': 'rgb(255, 255, 100)'}
    );
  })
  .done(function(data) {
    if (data === 'true') {
      $('tr[data-index="'+index+'"]').css(
        {'background-color': 'rgb(212, 255, 212)'}
      );
    }
  });
}

function eliminarHabitante(index, cedula){
  var apartamento = parseInt($('#numero_apartamento').html());
  $.ajax({
    url: '/habitantes-remover/'+cedula+'/'+apartamento,
    type: 'GET',
  })
  .fail(function() {
    $('tr[data-index="'+index+'"]').css(
      {'background-color': 'rgb(255, 255, 100)'}
    );
  })
  .done(function(data) {
    if (data === 'true') {
      $('tr[data-index="'+index+'"]').css(
        {'background-color': 'rgb(255, 212, 212)'}
      );
    }
  });
}
