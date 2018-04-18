$(document).ready(function () {
    $('#Crear').click ( function(){
        $('#crear').show();
        $('#borrar').hide();
        $('#mover').hide();
        $('#ver').hide();
    })
    $('#Borrar').click ( function(){
        $('#crear').hide();
        $('#borrar').show();
        $('#mover').hide();
        $('#ver').hide();
    })
    $('#Mover').click ( function(){
        $('#crear').hide();
        $('#borrar').hide();
        $('#mover').show();
        $('#ver').hide();
    })
    $('#Ver').click ( function(){
        $('#crear').hide();
        $('#borrar').hide();
        $('#mover').hide();
        $('#ver').show();
    })
})