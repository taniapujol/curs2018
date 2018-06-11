// Empieza el jquery
$(document).ready(function() {
    function pintaContenido(categoria) {
        var cat = categoria;
        // Cargamos ajax para obterner las variables nombre, descripcion, precio y categoria llamando a la base de datos por php.
        $.ajax({
            url: 'php/servicios/newObra.php', 
            type: 'POST',
            dataType: 'json',
            success: function(result) {
                
                
            },
            error: function(result) {
                alert("errorrrrrr!!!");
            }
        });
    // fin de la funcion
    }
// fin del jquery
})