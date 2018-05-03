<?php 
$host = "localhost";
$user = "root";
$bd = "aerolinia";
$pass = "tania1979";
// array asociativa para la conneccion
$cfg = array(
    "host" => $host,
    "user" => $user,
    "bd"   => $bd,
    "pass" => $pass);
// coneccion al mysqli
$mysqli= new mysqli($cfg['host'],$cfg['user'], $cfg['pass'], $cfg['bd']);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: ".$mysqli->connect_error;
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta a una bd</title>
    <style>
        table{
            width:50%;
            margin:auto;
            border: 1px solid black;
        }
        table caption {
            font-size:1.5em;
            background: black;
            color: white;
        }
        table tr:nth-child(even) {
        background-color: #eee;
        }
        table tr:nth-child(odd) {
        background-color: #fff;
        }
        table th {
            background-color: black;
            color: white;
        }
        table td { 
            text-align:center;
        }
    </style>
</head>
<body>
<table>
    <caption><?=$bd.' --- TABLA : personal'?></caption>
    <tr>
        <th>idpersonal</th>
        <th>nombre</th> 
        <th>categoria</th>
        <th>Edad</th>
    </tr>
    <?php 
    // Mostrar el resultado de la llamada del 'SELECT'
    $resultado = $mysqli->query("SELECT * FROM personal");
    $filas = $resultado-> fetch_all();
    foreach ($filas as $fila) {?>
        <tr>
        <?php foreach ($fila as $key => $value ){?>
            <td><?=$value;?></td>
        <?php } ?>
        </tr>
    <?php } ?>
</table>
    <h1>Select diferentes</h1>
    <p> Select con count <p>
    <?php 
    $resultado = $mysqli->query("SELECT COUNT(*) FROM personal");
    $fila = $resultado->fetch_assoc();
        foreach ($fila as $value) {
            printf ($fila);
        }
    ?>
</body>
</html>
<?php
// insertar un campo en nuestra bd.
// $a=4;
// while ($a <= 10) {
//     $name = 'azafata'.$a;
//     $query ="INSERT INTO personal VALUES($a,'$name','azafata')";
//     // echo $query;
//     if ($mysqli->query($query) === false) {
//         printf('fallo al crear el insert'.'<br>');
//     }
//     $a++;
// }
?>
