$(document).ready(function () {
    $('#Modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var content = button.data('envio')
        var seccion = button.data('seccion') 
        console.log(content+' <-data.id')
        console.log(seccion+' <-data-seccion');
        // $.get('php/Util/modal.php',{seccion:seccion,id:content}) 
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + seccion)
    })
});