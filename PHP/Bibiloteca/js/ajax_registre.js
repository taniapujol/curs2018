$.ajax({
    type: "post",
    url: "php/Consutas/consulta-obra.php",
    data: "data",
    dataType: "JSON",
    success: function (response) {
        console.log(response);
    }
});