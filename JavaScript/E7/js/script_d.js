/* Pseudo codigo del ejercicio
    inicial = 2
    mientras inicial < 100
        multiplica la variable por si misma
    fin de mientras
/* funcion para mostrar en pantalla el resultado */
function imprimir(numero) {
    var capa = document.getElementById('resultado');
    capa.insertAdjacentHTML('beforeend', 'el numero alcanzado es: ' + inicial);
}
/* declaracin de variables */
var inicial = 2;
while (inicial < 100) {
    inicial*= inicial;
}
imprimir(inicial);