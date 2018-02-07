/* Pseudo codigo del ejercicio

    pedir numero
    resultado = 1
    de indice=0 hasta indice < numero pedido
        resultado = resultado x ( numero pedido - indice)
        indice ingrementa
    fin de de..hasta

/* funcion para mostrar en pantalla el resultado */
function imprimir(faltorial) {
    var capa = document.getElementById('resultado');
    capa.insertAdjacentHTML('beforeend','el factorial del numero dicho es: '+ faltorial);
}
/* declaracin de variables */
var numero = prompt ('introduce el numero a factorial');
var result = 1;
for ( i = 0; i < numero; i++ ){
    result *= (numero - i);
    console.log (i);
    console.log (result);
}
imprimir(result);