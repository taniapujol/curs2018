<?php
// ____________________________________________________________________________________________
// 
//                          FUNCIONES DE PHP    
// 
// ____________________________________________________________________________________________


// La funcion 'initCfg()' inicializamos todas las variables que necesito
function initCfg()
{   
    $cfg['username']    = "";
	$cfg['pass']        = "";
    $cfg['tipo']        = $_SESSION['usuario']['tipo'] = "invitado";
}
// La función 'checkUser( @param:usuario y contraseña )' chequea los usuarios y nos devuelve el tipo de usuario que es   
function checkUser ($usuario,$password)
{
    // incluimos la connecion a la table usuarios
    include('php/utils/usuarios.php');
    // recoremos la array de usuarios
    if ($nfilas >0) {
        $fila = $users->fetch_assoc();
        $_SESSION['usuario']['tipo'] = $_SESSION['tipo'] = $fila['tipo'];
        $_SESSION['usuario']['username'] = $usuario;
        return true;
    } 
    return false;
}
// La función 'newUser()' chequea los usuarios y nos devuelve el tipo de usuario que es   
function newUser ()
{
    if (isset($_POST['loginNew'])) {
        // incluimos la connecion a la table usuarios
        include('php/utils/connect.php');
        $user=$_post['user'];
        $password=md5($_POST['password']);
        $nombre=$_POST['nombre'];
        $apellidos=$_POST['apellidos'];
        $direccion=$_POST['direccion'];
        $emil=$_POST['email'];
        $telf=$_POST['telefono'];
        $tipo='usuario';        
        $sql = "INSERT INTO `fullsport`.`usuarios` (`user`, `password`, `nombre`, `apellidos`, `direccion`, `email`, `telefono`, `tipo`) VALUES ('$user', '$password', '$nombre', '$apellidos', '$direccion', '$email', '$telefono', 'usuario');";
        $new= $con->query($sql);
        if($new){
            header("Location:php/view/body/form-login.php");
        } else {
            echo 'error al introducir datos';    
        };
        mysqli_close($con);
    return false;
    }
}
// La función 'getFiles(@param: directorio a leer y la seccion a mostrar)' nos devuelve una array con todos los ficheros
function getFiles($dir){
    $files = scandir($dir);
    // Eliminosmos '.' y '..' de la array files;
    unset($files[0]);
    unset($files[1]);		
    return $files;
}

// La función 'getButton(@param: directorio a leer)' nos devuelve una array con todos los directorios existentes para transformarlos en botones
function getButton($dir){
    $files = scandir($dir);
    // Eliminosmos '.' y '..' de la array files;
    unset($files[0]);
    unset($files[1]);		
    return $files;
}
// La función 'uploadFiles(@param: tipo de deporte (montana,agua,etc..)) nos sube un fichero de text y imagen en el tipo que le inticamos
function uploadFiles($tipo){
	if(isset($_FILES['archivo']['tmp_name'])){
         echo'existe archivo para subir'.'<br>';
		if ((is_uploaded_file($_FILES['archivo']['tmp_name'])&&(is_uploaded_file($_FILES['imagen']['tmp_name'])))){
            echo'preparamos archivos'.'<br>';
            // preparamos el archivo que hemos subido
			$nombreDirectorio= "deportes/".$tipo."/";
			$nombreFichero= $_FILES['archivo']['name'];
			move_uploaded_file($_FILES['archivo']['tmp_name'],$nombreDirectorio. $nombreFichero);
            // preparamos la imagen que hemos subido
			$nombreDirectorio= "img/".$tipo."/";
			$filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $_FILES['archivo']['name']);
			$nombreFichero= $filename.".jpg";
            move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreDirectorio. $nombreFichero);
            echo $_FILES['archivo']['tmp_name'];
			return true;
		}
		else{
			return false;
		}
	}
}
// la Funcion printContent(@param directorio de texto y directorio de image) nos pinta la visualizacion de los diferentes deportes
function printContent ($directorio, $directorio2)
{
    $files = getFiles($directorio);     
    foreach ($files as $file) {         
        $filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
        echo "<div class= \"content-box\">";
        echo "<h2><strong>".$filename."</strong></h2><br><br>";         
        echo "<img src=\"$directorio2/$filename.jpg\" alt=\"$filename\"> <br>";
        $filepath=$directorio."/".$file;         
        $content = file_get_contents($filepath,FILE_USE_INCLUDE_PATH);         
        echo "<p>".$content."</p>"; 
        echo "</div>";    
    } 
}
// la funcion printExp(@param directorio)
function printExp($directorio)
{
    $files = getFiles($directorio);
    foreach ($files as $file) {
        $filename = preg_replace('/\\.[^.\\s]{3,4}$/', '', $file);
        echo "<h2><strong>".$filename."</strong></h2><br><br>";
        $filepath=$directorio."/".$file;
        $content = file_get_contents($filepath,FILE_USE_INCLUDE_PATH);         
        echo $content."<br><br>";
    }
}
// fin de archivo funciones.php
?>