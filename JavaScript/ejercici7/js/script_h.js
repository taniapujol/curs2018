/* Pseudo codigo del ejercicio
    pedir texto
    contador = 1
    mientras texto diferente a vacio ('')
        si contador es mayor que longuitud de texto o el caracter en la posicion del contador es igual a "$"
            break
        sino  mostramos el caracter en la posicion de contador 
        contador augmenta 1
    fin de mientras
*/
var texto = prompt('introduce un texto');
var contador = 0;
while (texto != '') {
    if (contador > texto.length || texto.charAt(contador) == "$") {
        break
    } else {
        alert(texto.charAt(contador));
    }
    contador++;
}