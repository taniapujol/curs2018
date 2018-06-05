<?php 
$num_items=10; //numero de items a mostrar
// consulta inicial donde sacamos el total de items de la tabla
include('php/Util/confing.php');
$sql="Select count(".$id_tabla.") as indice from ".$tabla;
$result= $con->query($sql);
$filas_num= $result->num_rows;
if ($filas_num>0) {
    while ($total = $result->fetch_array()) {
        $total_items = $total['indice'];
    }
}
$con->close();
$pag=1;
$total_pag= ceil($total_items/$num_items);

if(isset($_GET['view'])){
    $pre_view = ($_GET['view']-1<0) ?   $_GET['view']-1 : 0;
    $next_view = ($_GET['view']+1<$num_items) ? $_GET['view']+1 : $num_items-1;
} else {
    $pre_view = $_GET['view'] = 0;
    $next_view = $_GET['view'] = 0;
}
?>
<div class="container-fluid" id="content" style="margin-top:20px">
<?php
    $inicio = $_GET['view']*$num_items;
    for ($i=0; $i<$total_pag; $i++){ 
        switch ($_GET['view']) {
            case $i:
                include('confing.php');
                $sql="SELECT 
                            CONCAT(s.nombre, ' ', s.apellidos) AS socio,
                            o.caratula AS obra,
                            p.fecha_inicio,
                            p.fecha_top,
                            p.fecha_devuelto,
                            o.categoria as categoria,
                            p.id as prestamo
                        FROM
                            prestamo p
                            inner join
                            copia c on p.id_copia=c.id_copia
                            inner join
                            obra o on c.id_obra=o.id_obra
                            inner join
                            socio s on s.codigo_socio=p.codigo_socio
                        WHERE
                            p.id > $inicio
                        LIMIT  $num_items";
                $res= $con->query($sql);?>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Socio</th>
                            <th scope="col">Obra</th>
                            <th scope="col">Fecha Inicio</th>
                            <th scope="col">Fecha Top</th>
                            <th scope="col">Devuelto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row=mysqli_fetch_array($res)) {?>
                        <tr>
                            <td><?=$row['socio']?></td>    
                            <td><img src="obras/<?=$row['categoria']?>/<?=$row['obra']?>" class="img-thumbnail" style="width: 50%;"></td>
                            <td><?=$row['fecha_inicio']?></td>
                            <td><?=$row['fecha_top']?></td>
                            <td class="font-weight-bold text-danger"><?=$row['fecha_devuelto']?></td>
                            <td><button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#Modal" data-envio="<?=$row['prestamo']?>" data-seccion="editar">EDITAR</button></td>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
                <?php }
                $con->close();
            break;
            }
?>
</div>
<!-- paginacion html -->
<div id="paginación" class="container-fluid" style="margin-bottom:50px;">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="? view=<?=$pre_view?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <?php     
            for ($i=0; $i < $total_pag; $i++) { ?>
                    <li class="page-item <?php if($_GET['view'] == $i) { echo "active";} ?> "><a class="page-link" href="?view=<?=$pag=$i?>"><?=$i+1?></a></li>
                <?php } ?>
            <li class="page-item">
                <a class="page-link" href="?view=<?=$next_view?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>