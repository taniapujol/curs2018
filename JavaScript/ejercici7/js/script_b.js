/* Pseudo-codigo

    final = no;
    mientras ( final no sea no)
        pedir mes
        buscar mes
        si encuentra mes
            informo
            final = si
        sino
            informo de que el mes no lo encuentra
    fin mientras
*/
/* funcion para mostrar en pantalla el resultado */
function imprimir(mes , posicion) {
    var capa = document.getElementById('resultado');
    capa.insertAdjacentHTML('beforeend','el mes '+ mes + ' que has indicado, se encuentra en la posición : '+ posicion);
}
/* declaracin de variables */
var meses = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SETIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];
var final = false;
while (!final) {
    var mes = prompt('Introduce el nombre de un mes');
    mes = mes.toUpperCase();
    var posicion = meses.indexOf(mes);
    if (posicion >= 0) {
       imprimir (mes, posicion);
        final = true;
    } else {
        alert('el mes que has indicado no se encuentra');
        var mes = prompt('Introduce el nombre de un mes');
        mes = mes.toUpperCase();
    }
}