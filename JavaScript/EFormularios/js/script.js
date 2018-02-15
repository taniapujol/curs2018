// Preparando el javascript a la espera de la carga de la página
window.addEventListener("closed",adios);
window.addEventListener("load", cargarEventos);

// creacion de la funciones necesarias
function AlertSubmit() {
    document.getElementById("enviar").addEventListener("click", function () {
        alert("Se Ha enviado el Formularia introducido");
        document.getElementById("enviar").type = "submit";
    })
}
function adios() {
    alert("adios, regresa pronto");
    window.close();
}


// Funcion Principar cargarEventos

function cargarEventos() {
    AlertSubmit();
}
