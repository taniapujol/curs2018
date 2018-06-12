$(document).ready(function () {   
    $('#Modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var content = button.data('envio')
        var sec = button.data('seccion') 
        console.log(content+' <-data.id')
        console.log(sec+' <-data-seccion')
        var modal = $(this)
        modal.find('.modal-title').text(sec)
        $.get('php/Util/modal/modal_body.php',{section:sec,id:content},function(data){
            modal.find('.modal-body').html(data)
        }); 
        switch (sec) {
            case 'editar':
                modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="submit" class="btn btn-secondary">Modificar</button>')
                break;
            // caso en que llamamos la funcion devorver() que nos permite hacer un update de prestamos
            case 'devolver':
                modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary submitBTN" id="devolver" onclick="Devolver()">Devolver</button>')
                break;
            // caso en que se muestra una vista extra de la obra
            case 'ver':
                modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>')
                break;
            // caso en que llamamos la funcion eliminar() que nos elimina una obra
            case 'eliminar':
                modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary submitBTN" id="eliminar" onclick="Eliminar()">Eliminar</button>')
                break;
            // caso en que llamamos la funcion alerta() que nos envia un coreo al socio alertanato de que la fecha top de devolucion a vencido
            case 'alerta':
                modal.find('.modal-footer').html('<button type="button" class="btn btn-primary submitBTN" id="Notificar" onclick="alerta()">Notificar</button>')
                break;
            // casp em que mostramos todas las copia existentes de la obra selecionada
            case 'copia':
                modal.find('.modal-footer').html('<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>')
                break;
        }
    // fin del modal show
    });
// fin del document.ready
});