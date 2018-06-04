<?php 

switch ($_REQUEST['section']) {
    
    case 'editar':?>
        <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
            </div>
        </form>
        <?php break;
    case 'ver':
        $id=$_REQUEST['id'];
        include('confing.php');
        $sql="SELECT * FROM obra WHERE id_obra=$id";
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }        
        $result = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)){?>
            <div class="row">
            <div class="col-sm-9">
                <h3><?=$row['nombre']?></h3>
                <div class="row">
                <div class="col-8 col-sm-6">
                    <img src="obras/<?=$row['categoria']?>/<?=$row['caratula']?>">
                </div>
                <div class="col-4 col-sm-6">
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