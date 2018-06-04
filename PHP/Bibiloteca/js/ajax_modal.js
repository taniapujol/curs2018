$(document).ready(function () {
    $('#Modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var content = button.data('envio')
        var sec = button.data('seccion') 
        console.log(content+' <-data.id')
        console.log(sec+' <-data-seccion')
        var modal = $(this)
        modal.find('.modal-title').text(sec)
        $.get('php/Util/modal_body.php',{section:sec,id:content},function(data){
            modal.find('.modal-body').html(data)
        }); 
    });
       
});