<?php
include("bd/conexion.php");

$id = $_REQUEST['id'];

$query = "DELETE from usuarios WHERE id = '$id'";
$rest = $con->query($query);
if($rest){
    header("location: ../21310362/mostrarUsuarios.php");
}
else{
    echo"No se ha modificado";
}
?>