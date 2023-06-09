<?php
session_start();
include 'class.php';
include 'bd/conexion.php';
if(!isset($_SESSION['carrito'])){
    header('location: productos.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estiloProductos.css">
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
            </ul>
            </div>
        </nav>
    </header>
    <?php
    $total = 0;
                foreach($_SESSION['carrito'] as $key=>$value){
                    $carritoP = json_decode($value, false);
                    $query = "SELECT * FROM productos WHERE id= '$carritoP->id'";
                    $result= $con->query($query);
                    $row = $result->fetch_assoc();
                    $total += $row["precio"];
                ?>
    <table>
        <thead>
            <tr>
        <th>Imágen</th>
        <th>Nombre</th>
        <th>Precio</th>
        </thead>
        </tr>
        <tr>
    <td><img height="80em" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>"/></td>
       <td><?php echo $row['nombre']; ?></td>
       <td>$<?php echo $row['precio']; ?></td>
       
        </tr>
    </div>
    </table>
    <form action="eliminarCarrito.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <button type="submit">Eliminar</button>
    </form>
    <?php
                }
    ?>
    <form style="display:flex; justify-content:center"  action="apoyoCarrito.php">
        <button type="submit">Comprar</button>
    </form>
    <p>Total $<?php echo $total?></p>
</body>
</html>
