/* Pseudo codigo del ejercicio
    pedir texto
    mientras texto menor de 5  o este vacio seguir pidiendo texto

*/
do {
    var texto = prompt('Introduce un texto que tenga más de 5 caracteres');
    console.log(texto.length);
} while (texto.length < 5 || texto == '');



