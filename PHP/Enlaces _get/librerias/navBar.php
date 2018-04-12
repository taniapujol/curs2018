<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">PHP_GET</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <!-- la navBar si el parametro es index -->
        <?php if ($page == 'index') {?>
            <li class="nav-item active">
            <a class="nav-link" href="index.php?pages=index">Index</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/quiSom.php?pages=quiSom">Qui Som?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/galeria.php?pages=galeria">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/contacto.php?pages=contacto">Contacto</a>
            </li>
        <?php } ?>
        <!-- la navBar si el parametro es quiSom -->
        <?php if ($page == 'quiSom') {?>
            <li class="nav-item ">
            <a class="nav-link" href="../index.php?pages=index">Index</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="quiSom.php?pages=quiSom">Qui Som?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="galeria.php?pages=galeria">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto.php?pages=contacto">Contacto</a>
            </li>
        <?php } ?>
        <!-- la navBar si el parametro es galeria -->
        <?php if ($page == 'galeria') {?>
            <li class="nav-item ">
            <a class="nav-link" href="../index.php?pages=index">Index</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="quiSom.php?pages=quiSom">Qui Som?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="galeria.php?pages=galeria">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto.php?pages=contacto">Contacto</a>
            </li>
        <?php } ?>
        <!-- la navBar si el parametro es contacto -->
        <?php if ($page == 'contacto') {?>
            <li class="nav-item ">
            <a class="nav-link" href="../index.php?pages=index">Index</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="quiSom.php?pages=quiSom">Qui Som?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="galeria.php?pages=galeria">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto.php?pages=contacto">Contacto</a>
            </li>
        <?php } ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-ligth my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>