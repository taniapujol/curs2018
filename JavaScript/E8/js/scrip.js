// funcion par_impar
function par_impar(numero) {
    result = numero % 2;
    if (result == 0) {
        return 'par'
    } else {
        return 'impar'
    }
}
// declaraciones de variable y codigo
do {
    var numero = prompt('introduce un entero');
    alert (par_impar(numero));
} while (numero != null || numero == false);





