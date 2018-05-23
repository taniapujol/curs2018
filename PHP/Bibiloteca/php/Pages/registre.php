<?php 
    if (isset($_POST['registre'])) {
        $newUser = array(
            'nombre'    => $_POST['nombre'] ,
            'apellidos' => $_POST['apellidos'],
            'direccion' => $_POST['direccion'],
            'dni'       => $_POST['dni'],
            'email'     => $_POST['email'],
            'password'  => md5($_POST['pass']));
        $newUser= newUser($newUser);
        if($newUser){
            $echo='Nuevo usuario registrado';
            
        }
    }
?>
<div class="container">
    <form class="form-signin" method="post">
        <h1>New Membrers</h1>
        <br>
        <br>
        <label for="inputName" class="sr-only">Nombre</label>
        <input type="text" id="inputName" name="nombre" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="inputApellidos" class="sr-only">Apellidos</label>
        <input type="text" id="inputApellidos" name="apellidos" class="form-control" placeholder="Apellidos" required="" autofocus="">
        <label for="inputDireccion" class="sr-only">Direccion</label>
        <input type="text" id="inputDireccion" name="direccion" class="form-control" placeholder="direccion" required="" autofocus="">
        <label for="inputDni" class="sr-only">DNI</label>
        <input type="text" id="inputDni" name="dni" class="form-control" placeholder="DNI" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="">
        <br>
        <button class="btn btn-lg btn-warning btn-block" type="submit" name="registre">Registre</button>
    </form>
</div>