<?php
    if(isset($_POST['seccio'])){
        switch ($_POST['seccio']) {
            case 'login':
            include("php/Pages/login.php");
            break;
        case 'registre':
            include("php/Pages/registre.php");
            break;
        }
    } else {
?>
<div class="container">
    <form  method="post">
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/login.jpg" width="246" height="205">
                    <div class="card-body">
                        <button class"btn btn-warning" type="submit" name="seccio" value="login">SING IN</button>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/registro.jpg" width="246" height="205">
                    <div class="card-body">
                        <button class"btn btn-warning" type="submit" name="seccio" value="registre">REGISTRE</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php } ?>