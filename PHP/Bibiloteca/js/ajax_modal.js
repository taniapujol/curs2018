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
function Eliminar() {
    
}
$(document).ready(function () {   
    $('#Modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var content = button.data('envio')
        var sec = button.data('seccion') 
        console.log(content+' <-data.id')
        console.log(sec+' <-data-seccion')
        var modal = $(this)
        modal.find('.modal-title').text(sec +' ficha tecnica ')
        $.get('php/Util/modal_body.php',{section:sec,id:content},function(data){
            modal.find('.modal-body').html(data)
        }); 
        if (sec=='editar') {
            modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" class="btn btn-secondary">Modificar</button>')
        }
        if (sec=='devolver') {
            modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary submitBTN" id="devolver" onclick="Devolver()">Devolver</button>')
        }
        if (sec=='ver') {
            modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>')
        }
        if (sec=='eliminar') {
            modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary submitBTN" id="devolver" onclick="Eliminar()">Eliminar</button>')
        }
    // fin del modal show
    });
// fin del document.ready
});