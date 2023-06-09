<?php
    include("bd/conexion.php");
    $rest= mysqli_query($con,"SELECT * FROM productos");
    $res=array();
    foreach($rest as $element){
        array_push($res,$element);
    }
    echo json_encode($res);
?>