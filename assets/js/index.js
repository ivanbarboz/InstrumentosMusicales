$(document).ready(function() {
    // Cuando el mouse pasa sobre el botón, muestra el contenido
    $('.boton-instrumento').mouseenter(function(){
        var instrumentoId = $(this).data('id');
        $.ajax({
            url: 'instrumento.php?id=' + instrumentoId,
            type: 'GET',
            success: function(response) {
                $('.contenedor-descripcion').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Cuando el mouse sale del botón, oculta el contenido
    $('.boton-instrumento').mouseleave(function(){
        $('.contenedor-descripcion').html('');
        
    });
});




