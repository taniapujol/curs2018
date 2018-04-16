<?php 
echo'subir arichivos funciona';
$nombre='';
$archivo='';
$imagen='';
$mensajeError = '';
if (isset($_POST['subir'])) {
   $nombre = $_POST['nombre'];
   if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
       if ($_files['archivo']['type']==='txt') {
            
       } else {
           $mensajeError = 'Archivo con extension no correcta, suba archivos solo txt'
       }
   } 
} else {
    # code...
}

?>