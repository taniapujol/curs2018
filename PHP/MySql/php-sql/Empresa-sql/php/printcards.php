<?php
    $directorio = 'consultas';
    $carpeta=scandir($directorio);
    $card = "";
    foreach ($carpeta as $ficheros) {
        if ($ficheros != "." && $ficheros != ".." && substr($ficheros,-4)=='.php') { 
?>
    <div class="col">
<?php $fichero = explode('.', $ficheros);
    $titulo= explode('_',$fichero[0]);?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?=$titulo[0].' '.$titulo[1]?></h5>
                <a href="#<?=$fichero[0]?>" class="card-link">VER</a>
            </div>
        </div>
    </div>
    <?php } ?>
<?php } ?>