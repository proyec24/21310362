<?php
include("bd/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar productos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <nav>
            <div>
            <ul class="barraul">
                <li>
                    <a href="../21310362/Principal.html"> Home </a>
                </li>
                <li>
                    <a href="../21310362/Productos.php"> Productos</a>
                </li>
                <li>
                    <a href="../21310362/login.html">LogIn</a>
                </li>
                <li>
                    <a href="../21310362/registro.html"> Registro</a>
                </li>
                <li>
                    <a href="../21310362/Ubicacion.html"> Ubicación</a>
                </li>
                <li>
                    <a href="../21310362/ProductoAdministrador.php">Reg producto</a>
                </li>
                <li>
                    <a href="../21310362/ProdAdmin.php">Mod producto</a>
                </li>
                <li>
                    <a href="../21310362/usuarioAdministrador.php">Reg usuarios</a>
                </li>
                <li>
                    <a href="../21310362/mostrarUsuarios.php">Mod usuarios</a>
                </li>
            </ul>
            </div>
        </nav>
    </header>
    <div class="grid">
    <form class="formRegistro" action="apolloUA.php" method="POST">

        <label for="">Ingrese el nombre</label>
        <input type="text" REQUIRED name="nombre">

        <label for="">Ingrese sus apellidos</label>
        <input type="text" REQUIRED name="apellidos">

        <label for="">Ingrese un correo</label>
        <input type="email" REQUIRED name="correo">

        <label for="">Ingrese una contraseña</label>
        <input type="password" REQUIRED name="pass">
        
        <label for="">Ingrese su código postal</label>
        <input type="text" REQUIRED name="codigopostal">

        <label for="">Ingrese su edad</label>
        <input type="text" REQUIRED name="edad">

        <label for="">Ingrese si será usuario (1) o admin(2)</label>
        <input type="text" REQUIRED name="auth">

        <button type="submit">Registrar</button>
    </form>
    </div>
    
</body>
</html>