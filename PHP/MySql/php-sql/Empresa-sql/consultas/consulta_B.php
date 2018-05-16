<section>
    
<table class="table">
    <caption><?=$bd.' --- TABLA : empleados'?></caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">nombre</th> 
            <th scope="col">fecha_contrato</th>
        </tr>
    <thead>
    <tbody>

<?php
    $sql="Select nombre, fecha_contrato from empleados order by fecha_contrato desc;";
    $result = $mysqli->query($sql);
    $filas = $result-> fetch_all();
    foreach ($filas as $fila) {?>
        <tr>
            <th scope="row"><?=$fila?></th>
        <?php foreach ($fila as $key => $value ){?>
            <td><?=$value;?></td>   
        <?php } ?>
        </tr>
    <?php }?>
    </tbody>
</section>