<?php
include 'bd/conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query= "INSERT INTO productos(nombre, precio, imagen) VALUES('$nombre','$precio','$imagen')";
$result= $con->query($query);

if($result){
    header("location: ../21310362/vistaAdmin.html");
}
else echo "Producto no agregado";
?>