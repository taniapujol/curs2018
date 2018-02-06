/* Pseudo codigo del ejercicio

    pedir numero
    resultado = 1
    de resultado hasta numero + 1
        numero = numero x resultado
        resultado incrementa
    fin de de..hasta

/* funcion para mostrar en pantalla el resultado */
function imprimir(faltorial) {
    var capa = document.getElementById('resultado');
    capa.insertAdjacentHTML('beforeend','el factorial del numero dicho es: '+ faltorial);
}
/* declaracin de variables */
var numero = prompt ('introduce el numero a factorial');
for ( i = 1; resultado > numero; i++ ) {
    resultado = resultado * i;
}
imprimir(resultado);