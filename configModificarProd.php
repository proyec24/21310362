<?php
include("bd/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$query = "UPDATE productos SET nombre= '$nombre',precio= '$precio', imagen= '$imagen' WHERE id = '$id'";
$rest = $con->query($query);
if($rest){
    header("location: ../21310362/vistaAdmin.html");
}
else{
    echo"No se ha modificado";
}