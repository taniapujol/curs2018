<table class="table">
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
$count=1;
$sql="Select id_empleado, nombre, fecha_contrato from empleados order by fecha_contrato desc;";
$result = $mysqli->query($sql);
$filas = $result-> fetch_all();
foreach ($filas as $fila) {?>
        <tr>
            <th scope="row"><?=$count?></th>
        <?php foreach ($fila as $key => $value ){?>
            <td><?=$value;?></td>   
<?php } 
$count++?>
        </tr>
<?php }?>
    </tbody>
</table>
