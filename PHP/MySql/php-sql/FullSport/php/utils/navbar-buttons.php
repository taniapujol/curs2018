<nav class="navbar navbar-expand-lg flex-nowrap justify-content-center align-items-center">
    <a class="navbar-brand" href="#" style="font-family: 'Black Han Sans', sans-serif; font-size:2em;"></a>
    <form action="index.php" method="post">
        <ul class="navbar-nav mr-auto">
            <?php 
            switch ($_SESSION['usuario']['tipo']) {
                // El user tipo admin tiene los botones todos activados
                case 'admin': ?>
                    <!-- hacemos un for para crear la barra de navegacion de los diferentes deportes -->
                    <?php $botones = getButton('deportes');
                        foreach ($botones as $key => $boton) { ?>
                            <li class="nav-item">
                                <button 
                                    class="navbarbut" 
                                    value="<?=$boton?>" name="seccio" 
                                    type="submit">
                                        <?=$boton?>
                                </button>
                            </li>`; 
                        <?php } ?>
                    <li>
                        <button class="navbarbut" value="experience" name="seccio" type="submit">Experiencias</button>
                    </li>
                    <li>
                        <button class="navbarbut" value="upload" name="seccio" type="submit">Nuevo Deporte</button>
                    </li>
                    <?php break;
                // El user tipo standard tiene los botones de deportes mas experiencias
                case 'usuario':?>
                    <!-- hacemos un for para crear la barra de navegacion de los diferentes deportes -->
                    <?php $botones = getButton('deportes');
                        foreach ($botones as $key => $boton) { ?>
                            <li class="nav-item">
                                <button 
                                    class="navbarbut" 
                                    value="<?=$boton?>" name="seccio" 
                                    type="submit">
                                        <?=$boton?>
                                </button>
                            </li>`; 
                        <?php } ?>
                     <li>
                        <button class="navbarbut" value="experience" name="seccio" type="submit">Experiencias</button>
                    </li>
                    <?php break;
                case 'invidado':
                    // el user tipo invitado no tiene ningun acceso a la navbar-buttons.php
                    break;
            }       
            
            
            ?>       
        </ul> 
    </form>