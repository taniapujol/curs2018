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
            modal.find('.modal-footer').append('<button type="button" class="btn btn-secondary">Modificar</button>')
        }
    });
    $("#Modificar").submit(function(event){
        event.preventDefault();
        var Data = $('#devolucion').value();
        console.log(Data);
        
        $.ajax({
            url: 'php/servivios/prestamo.php',
            type: 'POST',
            data: Data,
          success : function(result) {
                 
            },
          error : function(result) {
          
            }  
        });
      });
    
});