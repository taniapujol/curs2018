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
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#" style="font-family: 'Black Han Sans', sans-serif; font-size:2em;">ESTACINA</a>
            <span class="text-inline" style="font-family: 'Black Han Sans', sans-serif; font-size:1em; color:white;">Dashboard</span>
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
                        <img src="../img/<?=$avatar; ?>" class="mx-auto d-block" alt="..." style="border-radius: 50%; margin:30px 0">
                        <h1 class="text-cente">
                            <?=$usuario?>
                        </h1>
                        <ul class="navbar-nav mr-auto">
                            <?= ($tipo == 'admin') ? '<li><a href="#" id="Crear"> Crear Receta </a></li>' : '';?>
                                <?= ($tipo == 'admin') ? '<li><a href="#" id="Borrar"> Borrar Receta </a></li>' : '';?>
                                    <li>
                                        <a href="#" id="Mover"> Mover Receta </a>
                                    </li>
                                    <li>
                                        <a href="#" id="Ver"> Ver Receta </a>
                                    </li>
                        </ul>
                    </div>
                    <div class="col-8" id="content">
                        <div id="crear">
                            <h1>Crear una Receta nueva</h1>
                            <form action="../php/subirArchivos.php" method="post" ENCTYPE="multipart/form-data" class="form-crear">
                                <label for="nombre">Nombre del archivo:</label>
                                <input type="text" name="nombre" id="nombre">
                                <br>
                                <label for="estaciones"> ELEGIR ESTACION</label><br>
                                <input type="checkbox" name="estaciones[]" id="estaciones" value="invierno"> INVIERNO
                                <input type="checkbox" name="estaciones[]" id="estaciones" value="primavera"> PRIMAVERA
                                <input type="checkbox" name="estaciones[]" id="estaciones" value="otono"> OTOÑO
                                <input type="checkbox" name="estaciones[]" id="estaciones" value="verano"> VERANO
                                <br>
                                <label for="archivo">
                                    <i class="fas fa-file fa-3x"></i>
                                </label>
                                <input type="file" name="archivo" id="archivo">
                                <br>
                                <label for="imagen">
                                    <i class="fas fa-file-image fa-3x"></i>
                                </label>
                                <input type="file" name="imagen" id="imagen">
                                <br>
                                <input type="submit" name="crear">
                            </form>
                        </div>
                        <div id="borrar">
                            <form action="" method="post" ENCTYPE="multipart/form-data" class="form-borrar">
                                <input type="file" name="archivo" id="archivo">
                                <br>
                                <label for="imagen">
                                    <i class="fas fa-file-image"></i>
                                </label>
                                <input type="file" name="imagen" id="imagen">
                                <br>
                                <input type="submit" name="borrar">
                            </form>
                        </div>
                        <div id="mover">
                            <form action="../php/subirArchivos.php" method="post" ENCTYPE="multipart/form-data">
                                <label for="nombre">Nombre del archivo:</label>
                                <br>
                                <input type="text" name="nombre" id="nombre">
                                <br>
                                <label for="archivo">
                                    <i class="fas fa-file"></i>
                                </label>
                                <input type="file" name="archivo" id="archivo">
                                <br>
                                <label for="imagen">
                                    <i class="fas fa-file-image"></i>
                                </label>
                                <input type="file" name="imagen" id="imagen">
                                <br>
                                <input type="submit" name="subir">
                            </form>
                        </div>
                        <div id="ver">
                            <form action="../php/subirArchivos.php" method="post" ENCTYPE="multipart/form-data">
                                <label for="nombre">Nombre del archivo:</label>
                                <br>
                                <input type="text" name="nombre" id="nombre">
                                <br>
                                <label for="archivo">
                                    <i class="fas fa-file"></i>
                                </label>
                                <input type="file" name="archivo" id="archivo">
                                <br>
                                <label for="imagen">
                                    <i class="fas fa-file-image"></i>
                                </label>
                                <input type="file" name="imagen" id="imagen">
                                <br>
                                <input type="submit" name="subir">
                            </form>
                        </div>
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
        <script src="../js/script.js"></script>
</body>

</html>