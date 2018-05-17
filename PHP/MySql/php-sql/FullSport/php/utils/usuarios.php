<?php  
  include("connect.php");
  $sql = "SELECT tipo, CONCAT(nombre,' ',apellidos) as nomApe 
          FROM usuarios 
          WHERE user='$usuario' AND password='$password'";
  $users = $con->query($sql);
  $nfilas = mysqli_num_rows($users);
  mysqli_close($con);
?>