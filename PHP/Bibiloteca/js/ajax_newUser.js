$(document).ready(function () {
    console.log('el jq de ajax_newUser esta en funcionamiento');

    $('#form-registre').on('submit', function (e) {
        console.log('se ha realizado un submit');
        //El event.preventDefault evita que se haga un submit por defecto. Así no se ejecuta el atributo action.
        e.preventDefault();
        // creamos la variable jasonData que recoge en un json todos los valores del formulario
        console.log('preparando ajas');
        var jsonData = JSON.stringify($('#form-registre').serializeArray());
        console.log('jsonData -> ' + jsonData);
        $.ajax({
            type: "POST",
            url: "php/servicios/newUser.php",
            dataType: "json",
            data: jsonData,
            success: function (response) {
                console.log(response);
                console.log(response.error);
                if (response.error === 0) {
                    alertify.success('Nuevo Usuario Registrado');
                    $("#status").html('<form action="index.php" method="post"><button type="submit" class="btn btn-block" value="SingIn" name="seccio" style="margin-top:10px;background-color: #05054C;color:#fff">Go to Login</button></form>');
                } else {
                    alertify.success('Usuario NO Registrdo, comprueve los datos');
                }

            },
            error: function (response) {
                console.log(error);
                alert("Error!!!");
            }
            // fin de ajax
        });
        // finde submit form-registre
    });
    // fin de document.ready
});
