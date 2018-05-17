<?php 
    // inicializacion de las variables de recogida de campos del formulario
    $usuario = " ";
    $password = "";
    // variable de error inicializadas a '' 
    $errorNombre = " ";
    $errorPassword = " ";
    // variables para el estilo 
    $color = "black";
    $displayNom = 'none';
    $displayPassword = 'none';    
    // Validadión del formulario y recogida por post del submit realizado
    if (isset($_POST['submit'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];                              
        // consulta a la base de datos
        include('php/confing.php');
        $sql = "SELECT tipus, CONCAT(nombre,' ',apellidos) as nomApe 
               FROM usuarios 
               WHERE user='$usuario' AND password='$password'";
        $res = $mysqli->query($sql);
        $nfilas = mysqli_num_rows($res);
        mysqli_close($con);
        if ($nfilas >0) {
            $fila = $mysqli->fetch_assoc($res);
            $_SESSION['usuario'] = $fila['nomApe'];
            $_SESSION['tipo'] = $fila['tipus'];

            header ("Location:home.php");
        } else {
            if ($usuario == ' ') {
            $errorNombre = 'Este campo es obliglatorio';
            $color = 'red';
            $displayNom = 'block';
            } 
            if ($password == '') {
            $errorPassword = 'Este campo es obliglatorio';
            $color = 'red';
            $displayPassword = 'block';
            } 
        } 
    } 
?>
<!-- Formulario -->
<div class="container">
    <form action="" method="post">
        <!-- campo nombre obligatorio con mensaje de error-->
        <label for="usuario">usuario : </label><br>
        <input type="text" name="usuario" id="usuario" value="<?= $usuario?>" placeholder="Tu Nombre">          
        <div class="obligatorio" style="display:<?=$displayNom?>"><?= $errorNombre; ?></div><br>
        
        <!-- campo password -->
        <label for="password">PASSWORD : </label>
        <input type="password" name="password" id="password" style="margin-bottom: 10px;" value="<?= $password?>"><br>
        <div class="obligatorio" style="display:<?=$displayPassword?>"><?= $errorPassword ?></div><br>
        
        <!-- botton de enviar -->
        <input type="submit" name="submit" value="ENVIAR FORMULARIO" style="background-color:black; color:white; font-size:1.5em; width:97%; heigth:100px; border-radius:10px">
        
    </form>
</div>