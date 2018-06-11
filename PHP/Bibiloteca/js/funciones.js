// funcion devolver, para asignar una fecha al campo de fecha_devuelto de nuestra bb.dd
function Devolver() {
    var id = $('#id_prestamos').val();
    var devolucion = $('#devolucion').val();
    console.log(id+' - '+devolucion);
    var formData = {'id':id,'devolucion':devolucion};
    console.log(formData);
    $.ajax({
        type: "post",
        url: "php/servicios/devolucion.php",
        data: formData,
       /* processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType*/
        beforeSend: function () {
            $('.submitBtn').attr("disabled","disabled");
            $('.modal-body').css('opacity', '.5');
        },
        success:function(msg){
            alert(msg);
            if(msg == 'ok')
            {window.location.reload();
            $("#myModal").modal('hide');
            
            }else{
                alert(msg);
            }
            $('.submitBtn').removeAttr("disabled");
            $('.modal-body').css('opacity', '');
        }
    // fin ajax
    });
}
// funcion eliminar, nos elimina una obra completa de la bb.dd y su ficha en la carpeta de obras
function Eliminar() {
    
}
// funcion enviarEmail, envia un email al socia imformado que su fecha_top a vencido
function enviarEmail() {
    
}