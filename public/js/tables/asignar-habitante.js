// http://bootstrap-table.wenzhixin.net.cn/examples/#select
function habitantesFormatter(value, row, index) {
  return [
    '<a class="eliminar ml10" href="javascript:void(0)" title="Remover como habitante">',
    '<i class="glyphicon glyphicon-remove"></i>',
    '</a>'
  ].join('');
}

window.habitantesEvents = {
  'click .eliminar': function (e, value, row, index) {
    if (confirm('Por favor confirme.')) {
      eliminarHabitante(index, row.cedula);
      $(e.currentTarget).hide(300);
    }
  }
};

function sinHabitantesFormatter(value, row, index) {
  return [
    '<a class="habitante" href="javascript:void(0)" title="Incluir como habitante">',
    '<i class="glyphicon glyphicon-ok"></i>',
    '</a>',
    '<a class="eliminar ml10" href="javascript:void(0)" title="Remover como habitante">',
    '<i class="glyphicon glyphicon-remove"></i>',
    '</a>'
  ].join('');
}

window.sinHabitantesEvents = {
  'click .habitante': function (e, value, row, index) {
    if (confirm('Por favor confirme adicion de habitante.')) {
      insertarHabitante(index, row.cedula);
      $(e.currentTarget).hide(300, function(){
        $(e.currentTarget).siblings().toggle(300);
      });
    }
  },
  'click .eliminar': function (e, value, row, index) {
    if (confirm('Por favor confirme.')) {
      eliminarHabitante(index, row.cedula);
      $(e.currentTarget).hide(300, function(){
        $(e.currentTarget).siblings().toggle(300);
      });
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
      $('button[name="mas-usuarios"]').hide(300);
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
      $('button[name="mas-usuarios"]').hide(300);
    }
  });
}
