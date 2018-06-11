$.ajax({
    type: "post",
    url: "php/servicios/newUser.php",
    data: "data",
    dataType: "JSON",
    success: function (response) {
        console.log(response);
    }
});