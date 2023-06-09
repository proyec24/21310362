<?php
include 'bd/conexion.php';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];
$codigopostal = $_POST['codigopostal'];
$edad = $_POST['edad'];
$auth = $_POST['auth'];

$sql=mysqli_query($con, "INSERT INTO `usuarios`
(`id`, `nombre`, `apellidos`, `correo`, `pass`, `codigopostal`, `edad`, `auth`) 
VALUES (0,'$nombre','$apellidos','$correo','$pass','$codigopostal','$edad', $auth)");
if($sql){
    header("Location: ../21310362/vistaAdmin.html");
}
?>