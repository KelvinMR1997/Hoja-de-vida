$('.galeria_img').click(function (e) {
    var img = e.target.src;
    var modal = '<div class="modal" id="modal"><img src = "'+ img +'" class= "modal-img" ><div class="modal-boton" id="modal-boton"><a href="#">Cerrar</a></div></div>';
    $('body').append(modal);

    $('#modal-boton').click(function(){
        $('#modal').remove();
    })
});

// $(document.readyState)(function(e){
//     var texto = $('texto').text()
// })

$(document).keyup(function(e){
    if (e.which==27){
        $('#modal').remove();
    }
})


// $('#enviar').click(function(){
//     alertify.confirm("¿Deseas enviar este mensaje?",
//   function() {
//     alertify.success('Mensaje enviado 😀');
//   },
//   function() {
//     alertify.error('Cancel');
//   }
// );
// })