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
        include('php/Util/confing.php');
        $sql="SELECT * FROM obra WHERE id=$id";
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }        
        $result = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($result)){?>
            <div class="row">
            <div class="col-sm-9">
                Level 1: .col-sm-9
                <div class="row">
                <div class="col-8 col-sm-6">
                    Level 2: .col-8 .col-sm-6
                </div>
                <div class="col-4 col-sm-6">
                    Level 2: .col-4 .col-sm-6
                </div>
                </div>
            </div>
        </div>
        <?php break;
    case 'eliminar':
        echo 'eliminar item';
        break;
    }

?>         