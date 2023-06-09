<?php
include("bd/conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE from productos WHERE id = '$id'";
$rest = $con->query($query);
if($rest){
    header("location: ./prodAdmin.php");
}
else{
    echo"No se ha modificado";
}
?>