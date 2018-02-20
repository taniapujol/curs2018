window.addEventListener("load", cargarEventos);

var maravillas = [{
        idImg : "foto4" ,
        text: "Maravilla 1 - Taj Mahal, India"
    },
    {
        idImg: "foto1",
        text: "Maravilla 2 - Cristo Reventor, Brasil"
    },

    {
        idImg: "foto3",
        text: "Maravilla 3 - Piramides , Egipto"
    },
    {
        idImg: "foto2",
        text: "Maravilla 4 - Gran Muralla, china"
    },

    {
        idImg: "foto5",
        text: "Maravilla 5 - Coliseum, Italia"
    },

    {
        idImg: "foto6",
        text: "Maravilla 6 - Chichen Itza, Mexico"
    },

    {
        idImg: "foto7",
        text: "Maravilla 7 - Machu Pichuu, Peru"
    }
];

function mostrarImg() {
    var idImg = this.id;
    var bgImg = window.getComputedStyle(this, null).backgroundImage;
    console.log("muestra id " + idImg);
    document.getElementById("fotoGrande").style.backgroundImage = bgImg;
    for ( var i in maravillas) {
        if ( maravillas[i].idImg == idImg){
            document.getElementById("texto").textContent = maravillas[i].text;       
            console.log(maravillas[i].idImg + "<- id");
            console.log(maravillas[i].text + "<- texto");
            
        }
    }
    
    
}

function cargarEventos() {
    var imagenes = document.getElementsByClassName("img");
    // console.log(imagenes);
    for (var i = 0; i < imagenes.length; i++) {
        imagenes[i].addEventListener("click", mostrarImg);
    }
}