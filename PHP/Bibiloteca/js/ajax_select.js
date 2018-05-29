// Empieza el jquery
$(document).ready(function() {
    function pintaContenido(categoria) {
        var cat = categoria;
        // Cargamos ajax para obterner las variables nombre, descripcion, precio y categoria llamando a la base de datos por php.
        $.ajax({
            url: 'php/Consultas/consulta-obra.php', 
            type: 'POST',
            dataType: 'json',
            success: function(result) {
                // recoresmos la array de resultados de la llamada al php
                $.each(result.query, function(k, v) {
                    var id = v.id;
                    var nombre = v.nombre;
                    var resumen = v.resumen;
                    var caratula = v.caratula;
                    var autor = v.autor;
                    var categoria = v.id_categoria;
                    if (cat == categoria) {
                        pintaCard(nombre, resumen, caratula, autor,categoria);
                    }
                });
            },
            error: function(result) {
                alert("errorrrrrr!!!");
            }
        });
    // fin de la funcion
    }
// fin del jquery
})