<?php 
echo'subir archivos funciona <br>';
$nombre='';
$estaciones= array();
$archivo='text/plain';
$imagenArray = array("image/png","image/jpg","image/bmp","image/svg","image/jpeg");
$mensajeError = '';
// si hacemos un submit del formulario, hacemos =>
if (isset($_POST['crear'])) {
    // recogomos las variables pasada por post de formulario
    $nombre = $_POST['nombre'];
    $estaciones = $_POST['estaciones'];

    // si se ha realizado una subida de archivos. hacemos =>
    if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
        // comprovamos si el archivo es con la extension .txt
         echo($_FILES['archivo']['type'].'<br>');
        if ($_FILES['archivo']['type'] == $archivo) {
            // recorremos la array de estaciones
            foreach($estaciones as $estacion) {
                $nombreDirectorio= '../estaciones/'.$estacion."/txt/";
                $nombreFichero= $nombre.'.txt';
                // movemos archivo a la carpeta destinada
                move_uploaded_file($_FILES['archivo']['tmp_name'],$nombreDirectorio.$nombreFichero);
                // mensaje segun el error dado por la subida de archivo
                switch ($_FILES['archivo']['error']) {
                    case '0':
                        echo 'Archivo correctamente';
                        break;
                    case '1':
                        echo 'El archivo cargado excede la directiva upload_max_filesize en php.ini.';
                        break;
                    case '2':
                        echo 'El archivo cargado excede la directiva MAX_FILE_SIZE que se especificó en el formulario HTML.';
                        break;
                    case '3':
                        echo 'El archivo cargado solo se cargó parcialmente.';
                        break;
                    case '4':
                        echo 'Ningun archivo fue subido.';
                        break;
                    // case '5':
                    //     echo '';
                    //     break;
                    case '6':
                        echo 'Falta una carpeta temporal. Introducido en PHP 5.0.3.';
                        break;
                    case '7':
                        echo 'Error al escribir el archivo en el disco. Introducido en PHP 5.1.0.';
                        break; 
                    case '8':
                        echo 'La extensión de PHP detuvo la carga del archivo. PHP no proporciona una forma de determinar qué extensión causó la detención de la carga del archivo; examinar la lista de extensiones cargadas con phpinfo () puede ser útil. Introducido en PHP 5.2.0.';
                        break;               
                }
            }

        } else {
            $mensajeError = 'Archivo con extension no correcta, suba archivos solo txt';
        }
    }

    // si se ha realizado una subida de imagen. hacemos =>
    if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
        // comprovamos si la extension del archivo imagen se encuentra en la array extensiones permididas
        echo ($_FILES['imagen']['type']).'<br>';
        if (in_array($_FILES['imagen']['type'],$imagenArray)) {
            // recorremos la array de estaciones
            foreach($estaciones as $estacion) {
                $nombreDirectorio= '../estaciones/'.$estacion."/img/";
                $nombreFichero= $nombre.'.jpg';
                // movemos archivo a la carpeta destinada
                move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio.$nombreFichero);
                // mensaje segun el error dado por la subida de archivo
                switch ($_FILES['imagen']['error']) {
                    case '0':
                        echo 'Archivo correctamente';
                        break;
                    case '1':
                        echo 'El archivo cargado excede la directiva upload_max_filesize en php.ini.';
                        break;
                    case '2':
                        echo 'El archivo cargado excede la directiva MAX_FILE_SIZE que se especificó en el formulario HTML.';
                        break;
                    case '3':
                        echo 'El archivo cargado solo se cargó parcialmente.';
                        break;
                    case '4':
                        echo 'Ningun archivo fue subido.';
                        break;
                    // case '5':
                    //     echo '';
                    //     break;
                    case '6':
                        echo 'Falta una carpeta temporal. Introducido en PHP 5.0.3.';
                        break;
                    case '7':
                        echo 'Error al escribir el archivo en el disco. Introducido en PHP 5.1.0.';
                        break; 
                    case '8':
                        echo 'La extensión de PHP detuvo la carga del archivo. PHP no proporciona una forma de determinar qué extensión causó la detención de la carga del archivo; examinar la lista de extensiones cargadas con phpinfo () puede ser útil. Introducido en PHP 5.2.0.';
                        break;               
                }
            }
        } else {
            $mensajeError = 'Archivo con extension no correcta, suba archivos solo con estension png, jpg, bmp, svg, o jpeg.';
        }
    } 
} else {
    $mensajeError = 'No se ha podido realizar el envio de datos';
}
echo $mensajeError;
?>