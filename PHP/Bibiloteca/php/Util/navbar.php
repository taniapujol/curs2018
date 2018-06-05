<!-- Fem un switch depedent del tipos de adminitrador que tenim -->
<nav>
    <form action="index.php" method="post" class="navbar">
        
        <?php 
        switch (($_SESSION['usuario']['tipo'])) {
            case 'none': ?>
        <li class="nav-item">
            <button type="submit" class="btn btn-outline-light" value="SingIn" name="seccio"> Sing In </button>
            <button type="submit" class="btn btn-outline-light" value="registre" name="seccio"> Registre </button>
        </li>
        <?php break;
            case 'admin' : ?>
        <li class="nav-item">
            <button type="submit" class="btn btn-outline-light" value="SingOut" name="seccio"> Sing Out</button>
        </li>
        <?php break;
            case 'usuario' : ?>
        <li class="nav-item">
            <button type="submit" class="btn btn-outline-light" value="SingOut" name="seccio"> Sing Out </button>
        </li>
        <?php break;
           
        } ?>
    </form>
</nav>