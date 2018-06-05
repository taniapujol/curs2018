<?php 

switch ($_REQUEST['section']) {
    
    case 'editar':?>
        <!-- Cuerpo de modal cuando la opcion es editar -->
        <form id="Modificar">
        <input type="date" class="form-control" id="devolucion" placeholder="fecha de devolucion">
        </form>
        <?php break;
    case 'ver':
        // cuerpo de modal cuando la opcion es ver   
        $id=$_REQUEST['id'];
        include('confing.php');
        $sql="SELECT * FROM obra WHERE id_obra=$id";
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }        
        $result = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)){?>
            <div class="row">
                <div class="col-sm">
                    <h3 class="text-uppercase">Titulo : <?=$row['nombre']?></h3>
                    <div class="row">
                    <div class="col-4 col-sm-4">
                        <img src="obras/<?=$row['categoria']?>/<?=$row['caratula']?>" width="125px" height="275px">
                        <p><?=$row['info']?>
                        <?php
                        if ($row['categoria']=='libros') {?>
                            <span>pag</span>
                        <?php }
                        if ($row['categoria']=='musica') {?>
                            <span>canciones</span>
                        <?php }
                        if ($row['categoria']=='peliculas') {?>
                            <span>min</span>
                        <?php } ?> 
                    </p>
                    </div>
                    <div class="col-8 col-sm-8">
                        <h5>Resumen</h5>
                        <hr>
                        <p><?=$row['resumen']?></p>
                    </div>
                    </div>
                </div>
        </div>
        <?php 
        }
        break;
    case 'eliminar':
        echo 'eliminar item';
        break;
    }

?>         