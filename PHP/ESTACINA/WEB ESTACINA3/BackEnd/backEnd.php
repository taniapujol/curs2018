<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BACKEND</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
</head>
<body>
   <form action="../php/subirArchivos.php" method="post" ENCTYPE="multipart/form-data">
       <label for="nombre">Nombre del archivo:</label><br>
       <input type="text" name="nombre" id="nombre"><br>
       <label for="archivo">Archivo:</label>
       <input type="file" name="archivo" id="archivo"><br>
       <label for="imagen">Imagen:</label>
       <input type="file" name="imagen" id="imagen"><br>
       <input type="submit" name="subir">
   </form>
</body>
</html>