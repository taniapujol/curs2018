<?php
    $directorio = 'consultas';
    $carpeta=scandir($directorio);
    foreach ($carpeta as $ficheros) {
        if ($ficheros != "." && $ficheros != ".." && substr($ficheros,-4)=='.php') { 
            $fichero = explode('.', $ficheros);    
        ?>
        <div id="<?=$fichero[0]?>"> 
        <?php  include("consultas/".$fichero[0].".php");?>
        </div> 
    <?php } ?>
<?php } 
?>