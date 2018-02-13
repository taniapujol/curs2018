/* Pseudo codigo del ejercicio
    contador = 10;
    confirm = si;
    De contador hasta 0  i confirm = si hacer
        confirm = mostrar la disminucion de contador
        si confirm= no 
            treca contador
    fin de..hasta

/* funcion para mostrar en pantalla el resultado */
function imprimir(faltorial) {
    var capa = document.getElementById('resultado');
    capa.insertAdjacentHTML('beforeend','el factorial del numero dicho es: '+ faltorial);
}
/* declaracin de variables */
var contador = 10;
var confirma = true;
for (i = contador; i <= 10  && confirma == true; i--) {
    confirma = confirm('confirm en: '+ i);
    if (!confirma) {
        confirma = false;
    }
}