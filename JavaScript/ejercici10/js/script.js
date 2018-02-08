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
        texto transformamos en array (.split('')) y lo guardamos en cadenaNormal
        cadenaNormal la invertimos (.reverse()) y lo guardamso en cadenaRevers
        llamos a la funcion CadenaSinEspacios para cadenaNormal y guardamos en cadenaNormal
        llamos a la funcion CadenaSinEpacios para cadenaRevers y guardamos en cadenaRevers
        devolvemos array[cadenaNormal,cadenaRevers]
    fin de funcion

    creamos variable iguales que es booleana a si
    pedimos texto
    llamamos a la funcion CadenasSinEspacios y lo guardamos en cadena
    de posicion inicial en cadena
        si cadena [0][i] diferentes [1][i] iguales es no
    fin de
    mostramos resultado de iguales
*/
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
    texto = texto.toLowerCase();
    cadenaNormal = cadena_sin_espacios(texto);
    cadenaNormal = cadenaNormal.split('');
    console.log ('cadenanormal      : '+ cadenaNormal);
    cadenaRevers = cadenaNormal.reverse();
    console.log ('cadenainvertida   : '+ cadenaRevers);
    cadenaArray = [cadenaNormal, cadenaRevers];
    return cadenaArray;
}
// Declaracion de variables globares
var iguales = true;
var cadena = [];

// var texto = prompt ('Introduce tu texto a comprobar');
var texto = 'La ruta nos aporto otro paso natura';
// codigo del ejercicio
cadena = cadenaArray(texto);
var cadena1 = cadena[0];
console.log(cadena1);
var cadena2 = cadena[1];
console.log(cadena2);
// console.log(cadena);
// for (var i in cadena1){
//     if (cadena1[i] === cadena2[i]) {
//         // console.log('cadena1' + cadena1);
//         // console.log('cadena2'+ cadena2);
        
//         iguales = true;
//     } else { iguales = false;}
// }
// if (iguales) {
//     alert('el texto es polindromo');
// } else {
//     alert('el texto no es polindromo');
// }