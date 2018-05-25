<?php 
    include('php/Util/confing.php');
    sql("SELECT caratula FROM obra");
    $obra = $con->query($sql);
    $nfilas = mysqli_num_rows($obra);
?>