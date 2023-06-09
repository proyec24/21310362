<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto</title>
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
    <?php
        include("bd/conexion.php");
        $id= $_REQUEST['id'];
        $query= "SELECT * FROM usuarios WHERE id = '$id'";
        $rest= $con->query($query);
        $row= $rest->fetch_assoc();
    ?>
    <form action="configModificarUsr.php?id=<?php echo $row['id']; ?>" method="POST">
        <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>"/>
        <input type="text" REQUIRED name="apellidos" placeholder="apellidos..." value="<?php echo $row['apellidos']; ?>"/>
        <input type="text" REQUIRED name="correo" placeholder="correo..." value="<?php echo $row['correo']; ?>"/>
        <input type="text" REQUIRED name="pass" placeholder="pass..." value="<?php echo $row['pass']; ?>"/>
        <input type="text" REQUIRED name="codigopostal" placeholder="codigopostal..." value="<?php echo $row['codigopostal']; ?>"/>
        <input type="text" REQUIRED name="edad" placeholder="edad..." value="<?php echo $row['edad']; ?>"/>
        <input type="text" REQUIRED name="auth" placeholder="auth..." value="<?php echo $row['auth']; ?>"/>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>