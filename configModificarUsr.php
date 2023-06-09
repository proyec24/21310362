<?php
include("bd/conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$codigopostal = $_POST['codigopostal'];
$edad = $_POST['edad'];
$auth = $_POST['auth'];
$query = "UPDATE usuarios SET nombre= '$nombre',apellidos= '$apellidos', correo= '$correo', pass= '$pass', codigopostal= '$codigopostal', edad= '$edad', auth= '$auth' WHERE id = '$id'";
$rest = $con->query($query);
if($rest){
    header("location: ../21310362/vistaAdmin.html");
}
else{
    echo"No se ha modificado";
}