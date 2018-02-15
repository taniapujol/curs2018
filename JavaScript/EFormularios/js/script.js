// Preparando el javascript a la espera de la carga de la página
window.addEventListener("load", cargarEventos);

// creacion de la funciones necesarias
function AlertSubmit() {
    document.getElementById("enviar").addEventListener("click", function () {
        alert("Se Ha enviado el Formularia introducido");
        document.getElementById("enviar").type="submit";
    })
}

// Funcion Principar cargarEventos

function cargarEventos() {
    AlertSubmit();
}