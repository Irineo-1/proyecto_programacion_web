
$(document).ready(function() {
    $('#formulario-contacto').submit(function(event) {
        event.preventDefault(); 

        var formData = $(this).serialize();
        
        $.ajax({
            type: 'POST',
            url: 'localhost/proyecto_progamacion_web/Controladores/enviar.php',
            data: formData,
            success: function(response) {
                
                $('#mensajes').html(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                $('#mensajes').html('<div class="error">Error al enviar el mensaje. Inténtalo de nuevo más tarde.</div>');
            }
        });
    })
});