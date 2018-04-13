function cargarContenido(fichero) {
    // console.log('entro en la funcion cargarContenido');
    // console.log(fichero);
    $.post("../php/print.php",{fichero:fichero},function (data) {
        console.log('entra en data');
        $("#content").html(data);        
    });
}
