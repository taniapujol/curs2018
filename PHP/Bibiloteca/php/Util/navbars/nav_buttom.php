<nav class="navbar navbar-expand-lg flex-nowrap justify-content-center align-items-center">
    <a class="navbar-brand" href="#" style="font-family: 'Black Han Sans', sans-serif; font-size:2em;"></a>
    <form action="index.php" method="post">
        <ul class="navbar-nav mr-auto">
            <?php 
            switch ($_SESSION['usuario']['tipo']) {
                // El user tipo admin tiene los botones todos activados
                case 'admin': ?>
                    <!-- hacemos un for para crear la barra de navegacion de los diferentes obras -->
                    <?php $botones = getButton('obras');
                        foreach ($botones as $key => $boton) { ?>
                            <li class="nav-item">
                                <button 
                                    class="navbarbut" 
                                    value="<?=$boton?>" name="seccio" 
                                    type="submit">
                                        <?=$boton?>
                                </button>
                            </li>
                        <?php } ?>
                    <li>
                        <button class="navbarbut" value="prestamos" name="seccio" type="submit">Prestamos</button>
                    </li>
                    <li>
                        <button class="navbarbut" value="socios" name="seccio" type="submit">Socios</button>
                    </li>
                    <li>
                        <button class="navbarbut" value="nueva_obra" name="seccio" type="submit">Nueva Obra</button>
                    </li>
                    <?php break;
                // El user tipo standard tiene los botones de obras mas prestamos
                case 'usuario':?>
                    <!-- hacemos un for para crear la barra de navegacion de los diferentes obras -->
                    <?php $botones = getButton('obras');
                        foreach ($botones as $key => $boton) { ?>
                            <li class="nav-item">
                                <button 
                                    class="navbarbut" 
                                    value="<?=$boton?>" name="seccio" 
                                    type="submit">
                                        <?=$boton?>
                                </button>
                            </li> 
                        <?php } ?>
                     <li>
                        <button class="navbarbut" value="prestamos" name="seccio" type="submit">Prestamos</button>
                    </li>
                    <?php break;
                case 'none':
                    // el user tipo invitado no tiene ningun acceso a la navbar-buttons.php
                    break;
            }       
            
            
            ?>       
        </ul> 
    </form>
</nav>