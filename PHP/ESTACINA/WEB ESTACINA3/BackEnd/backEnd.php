<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BACKEND</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">ESTACINA</a>
            <span class="text-inline">Dashboard</span>
            <form class="form-inline" action="../php/sesionDestroy.php" method="POST">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="cerrar">SING OUT</button>
            </form>
        </nav>
    </header>
    <?php
    if (isset($_SESSION['usuario'])) { ?>
        <seccion>
            <div class="container-fluid" style="margin:0px;">
                <div class="row">
                    <div class="col-4 bg-dark text-light" style="height:900px;">
                        <?php 
                            $usuario = $_SESSION['usuario'];
                            $tipo = $_SESSION['tipo'];
                            ($tipo == 'admin') ? $avatar = 'avatar-admin.jpg' : $avatar = 'avatar-usuario.png';
                        ?>
                        <img src="../img/<?=$avatar?>" class="mx-auto d-block" alt="..." style="border-radius: 50%;">
                        <h1 class="text-cente" style="display:block;"><?=$usuario?></h1>
                        <ul class="navbar-nav mr-auto">
                            <li><a href="#" onclick="cargarContenido('')"> Crear Receta </a></li>
                            <li><a href="#" onclick="cargarContenido('')"> Borrar Receta </a></li>
                            <li><a href="#" onclick="cargarContenido('')"> Mover Receta </a></li>
                            <li><a href="#" onclick="cargarContenido('')"> Ver Receta </a></li>         
                        </ul>
                    </div>
                    <div class="col-8" id="content">
                        <form action="../php/subirArchivos.php" method="post" ENCTYPE="multipart/form-data">
                            <label for="nombre">Nombre del archivo:</label>
                            <br>
                            <input type="text" name="nombre" id="nombre">
                            <br>
                            <label for="archivo">Archivo:</label>
                            <input type="file" name="archivo" id="archivo">
                            <br>
                            <label for="imagen">Imagen:</label>
                            <input type="file" name="imagen" id="imagen">
                            <br>
                            <input type="submit" name="subir">
                        </form>
                    </div>
                </div>
            </div>
        </seccion>

        <?php } else {
            /* Redirecciona a una página diferente en el mismo directorio el cual se hizo la petición */
            $host  = $_SERVER['HTTP_HOST'];
            $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra = '../../login.php';
            header("Location: http://$host$uri/$extra");
            exit;
        }
    ?>
        <!-- Scripts de boostrap -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>