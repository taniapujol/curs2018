// Empezamos nuestro jquerry externo
$(document).ready(function () {
    // Testeando si Jquery esta funcionando
        var testeo = true;
        if (testeo) console.log("cargado Jquery");
    // declaracion de variables
        var valor1; // es number
        var operacion; // es string
        var bacio = "";
    // Funcion obtener numero (Boton (0)..(9))
    $("input[name=btn]").click(function () {
        $("#display").val($("#display").val() + $(this).val());
    });
    // Funcion suma (Boton (+))
    $("input[name=suma]").click(function () {
        // Obtenemos el valor1 y preparamos para recibir el valor2.
        if ($("#display").val() != bacio) {
            valor1 = parseFloat($("#display").val());
            operacion='suma';
            $.post("index.php",{num1:valor1, op:operacion});
            $("#display").val(bacio);
            $(".op").text($(this).val());
        } else {
            alert("introduzca un valor para la operación");
        }
        if (testeo) console.log(valor1, operacion);
    });    
    // Funcion resta (Boton (-))
    $("input[name=resta]").click(function () {
        // Obtenemos el valor1 y preparamos para recibir el valor2.
        if ($("#display").val() != bacio) {
            valor1 = parseFloat($("#display").val());
            operacion='resta';
            $.post("index.php",{num1:valor1, op:operacion});
            $("#display").val(bacio);
            $(".op").text($(this).val());
        } else {
            alert("introduzca un valor para la operación");
        }
        if (testeo) console.log(valor1, operacion);
    });
    // Funcion multiplicar (Boton (*))
    $("input[name=por]").click(function () {
        // Obtenemos el valor1 y preparamos para recibir el valor2.
        if ($("#display").val() != bacio) {
            valor1 = parseFloat($("#display").val());
            operacion='multiplicar';
            $.post("index.php",{num1:valor1, op:operacion});
            $("#display").val(bacio);
            $(".op").text($(this).val());
        } else {
            alert("introduzca un valor para la operación");
        }
        if (testeo) console.log(valor1, operacion);
    });
    // Funcion dividir (Boton (/))
    $("input[name=divi]").click(function () {
        // Obtenemos el valor1 y preparamos para recibir el valor2.
        if ($("#display").val() != bacio) {
            valor1 = parseFloat($("#display").val());
            operacion = 'dividir';
            $.post("index.php",{num1:valor1, op:operacion});
            $("#display").val(bacio);
            $(".op").text($(this).val());
        } else {
            alert("introduzca un valor");
        }
        if (testeo) console.log(valor1, operacion);
    });
    // Funcion Borrar un numero (Boton (<-))
    $("input[name=C]").click(function(){
        // obtengo el numero de caracteres introducidos en el display
        var len = $("#display").val().length;
        // guardo el valor del display
        var valor = $("#display").val();
        if (testeo) console.log(len,valor);
        // replazo el valor por su valor menos un caracter
        valor = valor.replace(valor.charAt(len -1),"");
        $("#display").val(valor);
        if (testeo) console.log(len,valor);
    });
    // Funcion resultado (Boton (=))
    // $("input[name=ingual").click(function(){
    //     if (($("#display").val() != bacio) && (valor1 != bacio)) {
    //         $("form").submit();
    //     }
    // });
    
    // Fin js
});