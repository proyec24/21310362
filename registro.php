<?php
include 'bd/conexion.php';
$nombre = trim($_POST['nombre']);
$apellidos = trim($_POST['apellidos']);
$correo = trim($_POST['correo']);
$pass = trim($_POST['pass']);
$codigopostal = trim($_POST['codigopostal']);
$fechanacimiento = trim($_POST['fechanacimiento']);

$sql=mysqli_query($con, "INSERT INTO `usuarios`(`id`, `nombre`, `apellidos`, `correo`, `pass`, `codigopostal`, `edad`, auth) VALUES (0,'$nombre','$apellidos','$correo','$pass','$codigopostal','$fechanacimiento', 1)");
header("Location: ../21310362/Principal.html");
?>