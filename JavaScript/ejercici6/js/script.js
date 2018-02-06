var letras = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E','T'];
var numero = prompt("Introduce tu numero de dni (sin letra)");
var letra = prompt("Introduce la letra de tu dni");
letra = letra.toUpperCase();

if (numero < 0 || numero > 99999999) {
    alert('El numero introducido no es valido')
} else {
    var letraCalculada = letras[numero%3];
    if (letraCalculada != letra) {
        alert('letra o numero propocionados no son correctos');
    } else {
        alert('el numero DNI y su letra son correctos');
    }
}