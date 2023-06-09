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
        $query= "SELECT * FROM productos WHERE id = '$id'";
        $rest= $con->query($query);
        $row= $rest->fetch_assoc();
    ?>
    <form action="configModificarProd.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
        <input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>"/>
        <input type="text" REQUIRED name="precio" placeholder="Precio..." value="<?php echo $row['precio']; ?>"/>
        <img  height= 150px src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/>
        <input type="file" REQUIRED name="imagen">
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>