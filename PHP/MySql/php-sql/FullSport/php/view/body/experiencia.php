// no funciona
<!-- <form action="experiencia.php" method="post">
    <ul>
        <li class="nav-item">
            <buttom type="submit" value="experiencia" name="exp">Experiencias</buttom>
        </li>
        <li class="nav-item">
            <buttom type="submit" value="new-exp" name="exp"> Nueva Experiencias</buttom>
        </li>
    </ul>
</form>
<div>
    <h5 class="card-title">Experiencias</h5>
    <?php 
    // if (isset($_POST['exp'])){
    //     echo $_POST['exp'];
    // }
    // if (isset($_POST['exp']) == 'experiencia') {
    //     printExp('experiencias');
    // }elseif (isset($_POST['exp']) == 'new-exp') {
    //     $subsec=$_POST['seccio'];
    //     include ("php/view/body/form-subida.php");
    // } ?>
</div> -->
<?php
$subsec=$_POST['seccio'];
include ("php/view/body/form-subida.php");?>
