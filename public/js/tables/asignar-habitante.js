// http://bootstrap-table.wenzhixin.net.cn/examples/#select
function actionFormatter(value, row, index) {
  return [
    '<a class="like" href="javascript:void(0)" title="Like">',
    '<i class="glyphicon glyphicon-heart"></i>',
    '</a>',
    '<a class="edit ml10" href="javascript:void(0)" title="Edit">',
    '<i class="glyphicon glyphicon-edit"></i>',
    '</a>',
    '<a class="remove ml10" href="javascript:void(0)" title="Remove">',
    '<i class="glyphicon glyphicon-remove"></i>',
    '</a>'
  ].join('');
}

window.actionEvents = {
  'click .like': function (e, value, row, index) {
    if (confirm('Por favor confirme.')) {
      habitanteAjax(row.cedula);
    }
  },
  'click .edit': function (e, value, row, index) {
    if (confirm('Por favor confirme.')) {
      console.log(row.cedula);
    }
  },
  'click .remove': function (e, value, row, index) {
    if (confirm('Por favor confirme.')) {
      console.log(index);
    }
  }
};

function habitanteAjax(cedula){
  var apartamento = parseInt($('#numero_apartamento').html());
  console.log(apartamento);
  $.ajax({
    url: '/habitantes/'+cedula+'/'+apartamento,
    type: 'GET',
  })
  .done(function(data) {
    if (data) {
      console.log(data);
    }
  });
}
