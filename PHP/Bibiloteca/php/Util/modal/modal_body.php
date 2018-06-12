<?php 

switch ($_REQUEST['section']) {  
    case 'devolver':
        $id=$_REQUEST['id'];?>
        <!-- html de modal 'devolver' -->
        <form id="Modificar">
        <input type="hidden" class="from-control" id="id_prestamos" name="id_prestamos" value="<?=$id?>">
        <input type="date" class="form-control" id="devolucion" name="devolucion" placeholder="fecha de devolucion">
        </form>
        <?php break;
    case 'ver':   
        $id=$_REQUEST['id'];
        include('../confing.php');
        $sql="SELECT * FROM obra WHERE id_obra=$id";
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }        
        $result = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)){?>
            <!-- html de modal 'ver' -->
            <div class="row">
                <div class="col-sm">
                    <h3 class="text-uppercase">Titulo : <?=$row['nombre']?></h3>
                    <div class="row">
                    <div class="col-4 col-sm-4">
                        <img src="obras/<?=$row['categoria']?>/<?=$row['caratula']?>" width="125px" height="275px">
                        <p><?=$row['info']?>
                        <?php
                        if ($row['categoria']=='libros') {?>
                            <span> pag</span>
                        <?php }
                        if ($row['categoria']=='musica') {?>
                            <span> canciones</span>
                        <?php }
                        if ($row['categoria']=='peliculas') {?>
                            <span> min</span>
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
        $id=$_REQUEST['id'];
        include('../confing.php');
        $sql="SELECT nombre, categoria FROM obra WHERE id_obra=$id";
        if (!$con) {die('Could not connect: ' . mysqli_error($con));}        
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result);
        // html del modal 'eliminar'
        echo '<p>Se va eliminar <strong>'.$row['nombre'].'</strong> de la categoria '. $row['categoria'].'</p>';
        break;
    case 'editar':
        echo 'editar ficha tecnica';
        break;
    case 'copia':
        // echo 'ver copias de la obras';
        $id=$_REQUEST['id'];
        include('../confing.php');
        $sql="SELECT 
                c.id_copia as codigo,
                c.deteriodo as deteriodo,
                c.comentario as comentario, 
                o.nombre as titulo,
                if(p.id is null, 0, p.id) as prestamo
            FROM copia c
                inner join
                obra o on c.id_obra=o.id_obra
                left outer join
                prestamo p on p.id_copia=c.id_copia
            where c.id_obra=$id";
        if (!$con) {die('Could not connect: ' . mysqli_error($con));}        
        $result = mysqli_query($con,$sql);?>
        <!-- html de modal 'copia' -->
        <table class="table table-hover">
            <thead class="thead">
                <tr>
                    <th scope="col">Codigo copia</th>
                    <th scope="col">Deteriodo</th>
                    <th scope="col">En Prestamo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            while ($row=mysqli_fetch_array($result)) {?>
                <tr>
                    <td><?=$row['codigo']?></td>    
                    <td>
                        <?php
                        if($row['deteriodo']==0){?>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="deteriodo" id="deteriodo" value="0" readonly>
                            </div>
                        <?php } else {?>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="radio" name="deteriodo" id="deteriodo" value="1" checked readonly>
                            </div>
                        <?php } ?>  
                    </td>
                    <td>
                        <?php 
                        $prestado=($row['prestamo'] == 1) ? 'En Prestamo' : ' ';
                        echo '<span style="color:blue;">'.$prestado.'</span>';
                        ?>
                    </td>
                    <td>
                        <?php
                        if($row['deteriodo']==1){ echo '<div style="">'.$row['comentario'].'</div>';}
                        ?>
                    </td>
                </tr>
            <?php } //fin del while ?>
            </tbody>
        </table>
        <?php break;
    case 'alerta':
            $id=$_REQUEST['id'];
            include('../confing.php');
            $sql="SELECT 
                    p.id,
                    CONCAT(s.nombre, ' ', s.apellidos) AS user,
                    s.email,
                    o.nombre as obra,
                    o.categoria as cat
                FROM
                    prestamo p
                        INNER JOIN
                    socio s ON p.codigo_socio = s.codigo_socio
                        INNER JOIN
                    copia c ON p.id_copia = c.id_copia
                        INNER JOIN
                    obra o ON c.id_obra = o.id_obra
                WHERE p.id = $id";
            if (!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }        
            $result = mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);?>
            <!-- html del modal 'alerta' -->
            <form id="alerta">
                <input type="hidden" class="from-control" id="id_prestamos" name="id_prestamos" value="<?=$id?>">
                <input type="hidden" class="from-control" id="obra" name="obra" value="<?=$row['obra']?>">
                <input type="hidden" class="from-control" id="cat" name="cat" value="<?=$row['cat']?>">
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInput">Name</label>
                    <input type="text" class="form-control mb-2" id="user" name="user" value="<?=$row['user']?>" readonly>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="email">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" value="<?=$row['email']?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje a enviar</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >Se enviara un mensaje predefinido</textarea>
                </div>
            </form>                
        <?php break;
} //fin del switch
?>         
