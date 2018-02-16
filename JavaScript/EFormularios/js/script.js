// Preparando el javascript a la espera de la carga de la página
window.addEventListener("closed", adios);
window.addEventListener("load", cargarEventos);

// variables globares
var qfoco = null;
console.log("foco:" + qfoco);

// creación de la funciones necesarias

function ponerRojo() {
    var labels = document.getElementsByTagName("label");
    var inputs = document.getElementsByTagName("inputs");
    console.log(labels);
    console.log(inputs);
    
    
    for (var i ; i < labels.length; i++ ) {
        labels[i].innerText.style.color = "red";
    }
    for (var i ; i < inputs.length; i++ ) {
        inputs[i].style.border = "3px solid red";
    }

}

function AlertSubmit() {
    document.getElementById("enviar").addEventListener("click", function () {
        var inputs = document.getElementsByTagName("input");
        var campoVacio = "";
        for ( var i ; i < inputs.length; i++ ) {
            if (inputs == "") {
                campoVacio = "Esta lleno;"
            }
        }
        if (campoVacio === "") {
            ponerRojo();
            alert("Tiene campos vacios, por favor rellenelos")
        } else {
            alert("Se Ha enviado el Formularia introducido");
            document.getElementById("enviar").type = "submit";
        }

    })
}

function AlertHola(params) {
    alert("Buenos dias, gracias por entra en nuestra página");
}

function adios() {
    confirm("adios, regresa pronto");
    window.close();
}

function canvi() {
    alert("cambio");
}

function foco() {
    if (this != qfoco) {
        //cambio de foco
        qfoco = this;
        console.log("foco:" + qfoco);
        alert("cambio foco");
    } else {
        console.log("no cambio foco:" + qfoco);

    }
}

// Funcion Principar cargarEventos

function cargarEventos() {
    var inputs = document.getElementsByTagName("inputs");
    console.log(inputs);
    for (var i ; i < inputs.length; i++ ) {
       inputs[i].addEventListener("change", canvi);
       inputs[i].addEventListener("focus", foco)
    }

    AlertSubmit();
}