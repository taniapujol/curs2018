<?php 
    include('confing.php');
    $sql_column="SELECT column_name FROM information_schema.columns WHERE TABLE_SCHEMA='vuelos' and  table_name='".$tabla."'";
    $columns = $con->query($sql_column);
    $nfilas = $columns->num_rows;
    if ($nfilas>0) {
        while ($col = $columns->fetch_array()) {
            array_push($columm_tabla,$col['column_name']);
        }
    }
    $con->close();
?>