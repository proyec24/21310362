<?php
include("bd/conexion.php");
$buscar = $_GET['buscar'];
$rest = mysqli_query($con, "SELECT * FROM usuarios WHERE nombre like '$buscar' '%'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../21310362/estiloProductos.css">
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
    $buscar = strtolower($_REQUEST['buscar']);
    ?>
    <div style="margin:auto; align-items:center; text-align:center;">
        <form action="buscadorUsr.php" method="get">
            <input style="width: 20%;" type="text" name="buscar" placeholder="Buscar" value="<?php echo $buscar;?>">
            <input type="submit" value="Buscar">
        </form>
    </div>
    <center>
        <table class="tabla">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellidos</th>
                    <th>correo</th>
                    <th>contraseña</th>
                    <th>código postal</th>
                    <th>edad</th>
                    <th>rango</th>
                    <th colspan="2">Operaciónes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row = $rest->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellidos']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['pass']; ?></td>
                    <td><?php echo $row['codigopostal']; ?></td>
                    <td><?php echo $row['edad']; ?></td>
                    <td><?php echo $row['auth']; ?></td>
                    <th><a href="modificarUsr.php?id=<?php echo $row['id']; ?>">Modificar</a></th><br>
                    <th><a href="eliminarUsr.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
    
</body>
</html>