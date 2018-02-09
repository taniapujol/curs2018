/* Pseudo codigo del ejercico
    creamos funcion CadenaSinEspacios que pasamos array como parametro
        creamos variable CadenaSinEspacio
        de posicion incial en array
            si array(posicion) es diferente espacio en blanco (" ")
                CadenaSinEspacios es igual CadenaSinEspacios mas array(posicion)
            fin si
        fin de
        devolvemos variable CadenaSinEspacio
    fin de funcion

    creamos funcion cadenaArray que pasamos el texto como parametro
        texto transformamos en minuscula (.toLowerCase())
        llamos a la funcion CadenaSinEspacios para cadenaNormal y guardamos en cadenaNormal
        texto transformamos en array (.split('')) y lo guardamos en cadenaNormal
        creamos una copia de cadenaNormal
        cadenaNormal la invertimos (.reverse()) y lo guardamso en cadenaRevers
        devolvemos array[cadenaNormal,cadenaRevers]
    fin de funcion

    creamos variable iguales que es booleana
    pedimos texto
    llamamos a la funcion CadenasSinEspacios y lo guardamos en cadena
    de posicion inicial en cadena
        si cadena [0][i] diferentes [1][i] iguales es no
    fin de
    mostramos resultado de iguales
*/
// creamos funciones necesarias
function cadena_sin_espacios(array) {
    // Declaración de variable locales
    var CadenaSinEpacios = '';
    for (var i in array) {
        if (array[i] != ' ') {
            CadenaSinEpacios += array[i];
        }
    }
    return CadenaSinEpacios;
}
function cadenaArray(texto) {
    // Declaración de variable locales
    var cadenaNormal;
    var cadenaRevers;
    var cadenaArray = Array[cadenaNormal, cadenaRevers];
    var texto = texto;
    texto = texto.toLowerCase(); // texto transformado en minusculas
    cadenaNormal = cadena_sin_espacios(texto);
    cadenaNormal = cadenaNormal.split('');
    var cadena = cadenaNormal.slice();
    //console.log ('cadenanormal      : '+ cadenaNormal);
    cadenaRevers = cadena.reverse();
    //console.log ('cadenainvertida   : '+ cadenaRevers);
    cadenaArray = [cadenaNormal, cadenaRevers];
    return cadenaArray;
}
function desarollo(text) {
    var iguales;
    var resultado;
    var cadena = [];
    cadena = cadenaArray(text);
    var cadena1 = cadena[0];
    console.log(cadena1);
    var cadena2 = cadena[1];
    console.log(cadena2);
    for (const i in cadena2) {
        if (cadena1[i] != cadena2[i]) {
            console.log('cadena1: ' + cadena1[i] + ' cadena2 :  ' + cadena2[i]);
            iguales = false;
        } else {
            console.log('cadena1: ' + cadena1[i] + ' cadena2 :  ' + cadena2[i]);
            iguales = true;
        }
    }
    if (iguales) {
        resultado = ('el texto es polindromo');
    } else {
        resultado = ('el texto no es polindromo');
    }
    return resultado;
}
function inicio() {
    var texto = prompt('Introduce tu texto a comprobar');
    var resultado = desarollo(texto);
    alert(resultado);
}
// Declaracion de variables globares
//--------------------------------------------------------------------
// codigo del ejercicio
    inicio();