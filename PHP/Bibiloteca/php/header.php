<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <a class="navbar-brand" href="#">USUARIOS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <button class="nav-link" value="home" name="seccion">Home
                        <span class="sr-only">(current)</span>
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" value="productos" name="seccion">Productos</a>
                </li>
            </ul>
        </form>
        <?php if (isset($_SESSION['usuario'])) { ?>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="SingOut">Sing Out</button>
            </form>
        <?php } ?>
        
    </div>
</nav>