<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ESTACINA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Si el parametro es index -->
        <?php if ($page == 'index') { ?>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?pages=index">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/QuiSom.php?pages=QuiSom">QUIEN SOMOS?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/Contacto.php?pages=Contacto">CONTACTO</a>
            </li>
        </ul>
        <span class="navbar-text">
            <button type="button" class="btn btn-dark">
                <a href="login.php">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
            </button>
        </span>
        <?php }?>
        <!-- Si el parametro es index -->
        <?php if ($page == 'QuiSom') { ?>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="../index.php?pages=index">INICIO</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="QuiSom.php?pages=QuiSom">QUIEN SOMOS?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contacto.php?pages=Contacto">CONTACTO</a>
            </li>
        </ul>
        <span class="navbar-text">
            <button type="button" class="btn btn-dark">
                <a href="../login.php">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
            </button>
        </span>
        <?php }?>
        <!-- Si el parametro es index -->
        <?php if ($page == 'Contacto') { ?>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="../index.php?pages=index">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="QuiSom.php?pages=QuiSom">QUIEN SOMOS?</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Contacto.php?pages=Contacto">CONTACTO</a>
            </li>
        </ul>
        <span class="navbar-text">
            <button type="button" class="btn btn-light">
                <a href="../login.php">
                    <i class="fas fa-sign-in-alt"></i>
                </a>
            </button>
        </span>
        <?php }?>


    </div>
</nav>