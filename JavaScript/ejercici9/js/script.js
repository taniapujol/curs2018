/* Pseudo Codigo 

    definir funcion infoTexto 
        funcion infoTexto (cadenaTexto){
            si cadenaTexto es igual cadenaTexto en mayusculas
                retorna el texto esta escrito en mayusculas
            sino si cadenaTexto es igual cadenaTexto en minusculas
                retorna el texto esta escrito en minusculas
            sino retorna el texto esta escrito en mayusculas y en minusculas
        }
    fin definicion de funcion
    pedir texto
    informa resultado de funcion infoTexto
*/
// Declaracion de funciones

function infoTexto(cadenaTexto) {
    if (cadenaTexto == cadenaTexto.toUpperCase()) {
        return 'El texto esta escrito es mayusculas';
    } else if (cadenaTexto == cadenaTexto.toLowerCase()) {
        return 'El texto esta escrito en minusculas';
    } else {
        return 'El texto esta escrito en mayusculas y minusculas';
    }
}
var CadenaTexto = prompt ('Escribe una texto aqui, y te informo como esta escrito.');
alert(infoTexto(CadenaTexto));