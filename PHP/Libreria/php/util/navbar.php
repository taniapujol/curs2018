<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="d-block">
        <a class="navbar-brand" href="#" style="font-family: 'Black Han Sans', sans-serif; font-size:2em;">
        <img src="img/logo.jpg" width="50" height="50" alt="">WikiBook</a>
    </div>
    
    <form class='navbarmenu' action="index.php" method="post">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <button class="navbarbut" value="home" name="seccio" type="submit">Home</button> 
            </li>
            <li class="nav-item">
                <button class="navbarbut" value="pelis" name="seccio" type="submit">Peliculas</button>
            </li>
            <li class="nav-item">
                <button class="navbarbut" value="series" name="seccio" type="submit">Series</button>
            </li>
            <li>
                <button class="navbarbut" value="libros" name="seccio" type="submit">Libros</button>
            </li>
            <?php 

            switch (($_SESSION['usuario']['tipo'])) {
                case 'none': ?>
                    <li class="float-right">
                        <button type="submit" class="btn btn-outline-light" value="SingIn" name="seccio"> Sing In </button>
                    </li>
                    <?php break;
                case 'admin' : ?>
                    <li>
                        <button class="navbarbut" value="upload" name="seccio" type="submit">Subir Ficheros</button>
                    </li>
                    <li class="float-right">
                        <button type="submit" class="btn btn-outline-light" value="SingOut" name="seccio"> Sing Out</button>
                    </li>
                    <?php break;
                case 'user' : ?>
                    <li class="float-right">
                        <button type="submit" class="btn btn-outline-light" value="SingOut" name="seccio"> Sing Out </button>
                    </li>
                    <?php break;
            }
            ?>    
        </ul>
    </form>
</nav>