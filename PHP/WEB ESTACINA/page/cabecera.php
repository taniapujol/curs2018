<?php 
 $imagen=cuaderno.jpg;

?>
<div class="container" style="background-image:url("img/<?=$imagen?>")>
    <nav class="navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="img/takeaway.png" width="100" height="100" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">recetario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">contacto</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Receta" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
</div>