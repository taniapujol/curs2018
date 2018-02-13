/* Pseudo codigo del ejercicio
    crear array meses
    de array meses final hasta array meses inicio hacer
        mostrar en pantalla su valor 
    fin de..hasta

/* declaracin de variables */
var meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','setiembre','octubre','noviembre','diciembre'];
console.log('entro en el bucle')
for (i = (meses.length-1); i >= 0; i--){
    console.log(i);
    alert('El contenido en la posicion : '+ i + ' es: '+ meses[(i)]);
}