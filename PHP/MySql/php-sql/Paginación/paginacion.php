<?php $num_items=10; //numero de items a mostrar?>
<h1 class="text-center bg-dark text-light">PAGINACION EN UNA BASE DE DATOS <?=$tabla?></h1>
<?php 
// consulta inicial donde sacamos el total de items de la tabla
include('confing.php');
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
<div class="container" id="content">
<?php
    $inicio = $_GET['view']*$num_items;
    for ($i=0; $i<$total_pag; $i++){ 
        switch ($_GET['view']) {
            case $i:
                include('confing.php');
                $sql="Select * from $tabla where ".$id_tabla." >".$inicio." limit ".$num_items;
                echo $sql;
                $res= $con->query($sql);
                $nfilas= $res->num_rows;
                if ($nfilas>0) {?>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <?php
                        foreach ($columm_tabla as $key => $value) {?>
                            <th scope="col"><?=$value?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = $res->fetch_array()) {?>
                        <tr>
                        <?php
                            for ($j=0; $j< count($columm_tabla); $j++) {?> 
                            <td><?=$row[$columm_tabla[$j]]?></td>
                        <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <?php }
                $con->close();
                break;
            }
    }
?>
</div>
<div class="container" id="paginación" style="margin-bottom:50px;">
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