$(document).ready(function () {
    $('#Modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var content = button.data('envio')
        var seccion = button.data('seccion') 
        console.log(content+' <-data.id')
        console.log(seccion+' <-data-seccion');
        switch (seccion) {
            case ver:
                $.post('php/Util/modal.php')
                break;
        
            default:
                break;
        }       
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + seccion)
        modal.find('.modal-body input').val(content)
      })
});