<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paginación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
</head>

<body>
    <h1>PAGINACION EN UNA BASE DE DATOS</h1>
    <?php 
    include('confing.php');
    $sql="Select count(IdAvion) as indice from avion";
    $result= $con->query($sql);
    $nfilas= $result->num_rows;
    
    if ($nfilas>0) {
        while ($total = $result->fetch_array()) {
            $total_items = $total['indice'];
        }
    }
    $num_items=10;
    $pag=1;
    $total_pag= ceil($total_items/$num_items);
    echo $total_pag
    ?>
    <div class="container" id="content">
    <?php
        $inicio = $_GET['view']*$num_items;
        for ($i=0; $i<$total_pag; $i++){ 
            switch ($_GET['view']) {
                case $i:
                    $sql="Select * from avion where IdAvion >".$inicio." limit 10";
                    $res= $con->query($sql);
                    // $nfilas= $res->field_count;
                    if ($nfilas>0) {
                        while ($row = $res->fetch_array()) {
                            echo "IdAvion ->".$row['IdAvion'].'<br>';
                            
                        }
                    }
                    break;
                }
        }
    ?>
    </div>
    <div class="container" id="paginación">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php     
                for ($i=0; $i < $total_pag; $i++) { ?>
                       <li class="page-item <?php if($_GET['view'] == $i) { echo "active";} ?> "><a class="page-link" href="? view=<?=$pag=$i?>"><?=$i+1?></a></li>
                    <?php } ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
</body>

</html>