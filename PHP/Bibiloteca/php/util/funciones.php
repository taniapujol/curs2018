<?php
// ____________________________________________________________________________________________
// 
//                          FUNCIONES DE PHP    
// 
// ____________________________________________________________________________________________



// La funcion 'initCfg()' inicializamos todas las variables que necesito
function initCfg()
{   
    $cfg['nombre']  = "";
	$cfg['pass']    = "";
    $cfg['tipo']    = "none";
    // $_SESSION['usuario']['tipo'] = "none";
    return $cfg;
}
// La función 'checkUser( @param:usuario y contraseña )' chequea los usuarios y nos devuelve el tipo de usuario que es   
function checkUser ($dni,$password)
{
    // incluimos la connecion a la table usuarios
    include('php/Util/confing.php');
    // echo('connecion establecida');
    $sql = "SELECT nombre, tipo
            FROM socio 
            WHERE DNI='$dni' AND password='$password'";
    $users = $con->query($sql);
    $nfilas = mysqli_num_rows($users);
    mysqli_close($con);
    // recoremos la array de usuarios
    if ($nfilas >0) {
        $fila = $users->fetch_assoc();
        $_SESSION['usuario']['tipo'] = $_SESSION['tipo'] = $fila['tipo'];
        $_SESSION['usuario']['nombre'] = $fila['nombre'];
        return true;
    } 
    return false;
}
// La función 'newUser()' chequea los usuarios y nos devuelve el tipo de usuario que es   
function newUser ($newUser)
{
    // incluimos la connecion a la table usuarios
    include('php/Util/confing.php');
    $dni=$newUser['dni'];
    $password=$newUser['password'];
    $nombre=$newUser['nombre'];
    $apellidos=$newUser['apellidos'];
    $direccion=$newUser['direccion'];
    $email=$newUser['email'];
    $tipo='usuario';        
    $sql = "INSERT INTO `socio` (`DNI`, `nombre`, `apellidos`, `direccion`, `email`, `tipo`,`password`) 
            VALUES (
                '$dni', 
                '$nombre', 
                '$apellidos', 
                '$direccion', 
                '$email', 
                '$tipo',
                '$password')";
    $new= $con->query($sql);
        if(!$new){
            echo 'error al introducir datos'; 
        };
        mysqli_close($con);
    return false;
}
// La función 'getButton(@param: directorio a leer)' nos devuelve una array con todos los directorios existentes para transformarlos en botones
function getButton($dir){
    $files = scandir($dir);
    // Eliminosmos '.' y '..' de la array files;
    unset($files[0]);
    unset($files[1]);		
    return $files;
}
// La función 'getFiles(@param: directorio a leer y la seccion a mostrar)' nos devuelve una array con todos los ficheros
function getFiles($dir){
    $files = scandir('obras/'.$dir);
    // Eliminosmos '.' y '..' de la array files;
    unset($files[0]);
    unset($files[1]);		
    return $files;
}
// la Funcion printContent(@param directorio de texto y directorio de image) nos pinta la visualizacion de los diferentes deportes
function printContent ($directorio)
{
    $categoria = $directorio;
    // verificamos que existe envio POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        $sql = "SELECT 
                    t.no_disp,
                    t2.si_disp,
                    IF(t.no_disp = t2.si_disp,
                        0,
                        t2.si_disp) AS copia,
                    t2.nombre AS nombre,
                    t2.id_obra AS id,
                    t2.caratula AS caratula,
                    a.nombre AS autor
                FROM
                    (SELECT 
                        copia.id_obra, COUNT(copia.id_obra) AS no_disp
                    FROM
                        prestamo
                    INNER JOIN copia ON copia.id_copia = prestamo.id_copia
                    WHERE
                        fecha_devuelto IS NULL
                    GROUP BY copia.id_obra) AS t
                        RIGHT JOIN
                    (SELECT 
                        COUNT(*) AS si_disp, obra.*
                    FROM
                        copia
                    RIGHT OUTER JOIN obra ON obra.id_obra = copia.id_obra
                    GROUP BY id_obra) AS t2 ON t.id_obra = t2.id_obra
                    INNER JOIN autor a ON id_autor = a.idautor
                WHERE
                    t2.categoria = '$directorio'";
        include('php/Util/confing.php');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }        
        $result = mysqli_query($con,$sql);
   
        echo "<div class=\"container\">";
            echo "<div class=\"row\">";
            while ($row=mysqli_fetch_array($result)){ 
                include('php/Util/cardBox.php');
            }
            echo "</div>";
        echo "</div>" ;  
    }
    $con->close();
}
// fin funciones
?>