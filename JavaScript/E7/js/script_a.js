/* funcion para inprimir en la caja de texto indicada*/
function alertCapa(texto,capaAlert) {
    var capa = document.getElementById(capaAlert);
    capa.insertAdjacentHTML('beforeend','<br>'+ texto);
}

var dias = ['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];

/* Estructura for 
    for ( var indice = 0 ; max posicion de la array ; incrementa indice)
*/
 for ( var i= 0; i< dias.length; i++){
    alertCapa(dias[i],'for');
}

/* Estructura for .. in */
 for (const key in dias) {
    if (dias.hasOwnProperty(key)) {
        const element = dias[key];
        alertCapa(element,'forIn');
    }
} 

/* Estructura for..of*/
 for (const indice of dias) {
    alertCapa(indice,'forOf');
} 

/* Estrutura while : Estructura while
La estructura while permite crear bucles que se ejecutan
ninguna o más veces, dependiendo de la condición indicada.
Su definición formal es:
while(condicion) {
...
}*/
var i = 0;
var MaxDias = dias.length;
 while (i < MaxDias) {
    alertCapa(dias[i],'while');
    i++;
}
i= 0;
do {
    alertCapa(dias[i],'doWhile');
    i++;
} while ( i < MaxDias);