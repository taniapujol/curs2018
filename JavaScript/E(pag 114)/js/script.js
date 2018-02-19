window.addEventListener("load", cargarEventos);

function cargarEventos() {
    var botones = document.getElementById("botonera").getElementsByTagName("button");
    console.log(botones);
    for (var i = 0; i < botones.length; i++) {
        // console.log(botones[i]);
        botones[i].addEventListener("click", function () {

            var texto = this.textContent;
            //    console.log(texto);
            document.title = texto;
            var titulo = document.getElementsByTagName("h1");
            titulo[0].textContent = texto;
        })
    }
    var colores = document.getElementById("colores").getElementsByTagName("div");
    console.log(colores);
    for (var i = 0; i < colores.length; i++) {
        colores[i].addEventListener("click", function () {
            console.log(this.id);
            var color = window.getComputedStyle(this, null).backgroundColor;
            console.log("color: " + color);
            document.getElementsByTagName("body").item(0).style.backgroundColor = color;
        })
    }

}