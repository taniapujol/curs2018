var maravillas = [{
        idImg: "foto4",
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
$('document').ready(function () {
    $(".img").on("click", function () {
        console.log(this);
        var idImg = $(this).id;
        console.log("muestra id " + idImg);
        var bgImg = $(this).css('background');

        $("fotoGrande").css('backgroundImage', 'bgImg');
        for (var i in maravillas) {
            if (maravillas[i].idImg == idImg) {
                $("texto").text = maravillas[i].text;
                console.log(maravillas[i].idImg + "<- id");
                console.log(maravillas[i].text + "<- texto");
            }
        }
    });

});