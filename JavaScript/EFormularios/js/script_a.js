window.addEventListener("load", cargarEventos);
/**/

function cargarEventos() {
    // infoChar(maxChar);
    // limita(maxChar);
    //var maxChar = 20;
    //console.log(maxChar);
}

function limita(event,maxChar) {
    var element = document.getElementById("textArea");
    var result = true;
    var code = event.key;

    if (element.value.length >= maxChar) {
        console.log(result);
        if (code == 127 || code == 32 || code == 08) {
            result = true;
        } 
        result = false;
    }   
    return result;
}

function infoChar(maxChar) {
    var element = document.getElementById("textArea");
    var result = '';
    
    if (element.value.length >= maxChar) {
        result = "Máximo " +  maxChar + "caracteres";
        document.getElementById("infoChar").innerHTML = result;
        limita(maxChar);
    } else {
        result = "Quedan " + (maxChar - element.value.length) + "caracteres";
        document.getElementById("infoChar").innerHTML = result;
    }
    console.log("result : " + result);
    console.log("caracteres : " +element.value.length);
    
}