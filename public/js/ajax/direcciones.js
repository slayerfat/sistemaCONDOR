$("document").ready(function(){
  $.ajax({
    type: 'GET', 
    dataType: "json",
    url: '/estados',
    data: null,
    success: function (datos){
      $.each(datos, function(index, val) {
        $('#state_id').append('<option value="'+val.id+'">'+val.description+'</option>');
      });
    }
  });

  // $("#state_id").change(function(){
  //   var id = $("#state_id").val();
  //   $.get("<?php //echo $municipio ?>",{param_id:id})
  //   .done(function(data){
  //     $("#cod_mun").html(data);
  //     $("#cod_mun").change(function(){
  //       var id2 = $("#cod_mun").val();
  //       $.get("<?php //echo $parroquia ?>",{param_id2:id2})
  //       .done(function(data){
  //         $("#cod_parro").html(data);
  //       });
  //     });
  //   });
  // });
});
// $("document").ready(function(){
//   $("#cod_est").load("<?php //echo $estado ?>");
//   $("#cod_est").change(function(){
//     var id = $("#cod_est").val();
//     $.get("<?php //echo $municipio ?>",{param_id:id})
//     .done(function(data){
//       $("#cod_mun").html(data);
//       $("#cod_mun").change(function(){
//         var id2 = $("#cod_mun").val();
//         $.get("<?php //echo $parroquia ?>",{param_id2:id2})
//         .done(function(data){
//           $("#cod_parro").html(data);
//         });
//       });
//     });
//   });
// });
