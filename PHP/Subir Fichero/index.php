<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir fichero</title>
</head>

<body>

    <?php
        $nombre="";
        $texto="";
        if (isset($_REQUEST['enviar'])) {
            $nombre=$_POST['nombre'];
            $texto=$_POST['texto'];
            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $nombreDirectorio= "img/";
	            $idUnico= $_POST['fechaActual'];
                $nombreFichero= $idUnico. "-" . $_FILES['imagen']['name'];
                move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio.$nombreFichero);
                print('fichero subido a la carpeta imagen');
            } else {
                print('Error al subir la imagen, comprueba el tamaño del fichero'.'<br>');
                print($_FILES['imagen']['size']);
            }
        } else { ?>
        <form action="index.php" method="post" ENCTYPE="multipart/form-data">
            <h1>Descripción del producto</h1>
            <label for="nombre">Nombre del producto:</label>
            <br>
            <input type="text" name="nombre" id="nombre" value ="<?=$nombre?>">
            <br>
            <label for="descripción">Descripción:</label>
            <br>
            <textarea name="texto" id="descripción" cols="30" rows="10" value ="<?=$texto?>"></textarea>
            <br>
            <input type="file" name="imagen" id="imagen">
            <br>
            <?php 
                $fecha = date("d.m.y");
            ?>
            <input type="hidden" name="fechaActual" value="<?=$fecha?>">
            <br>
            <input type="submit" name="enviar" value="ENVIAR">
        </form>
        <?php } ?>
</body>

</html>