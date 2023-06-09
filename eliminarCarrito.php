<?php 
session_start();
$id = $_POST['id'];
echo $id;
echo $_SESSION['carrito'][0];
foreach($_SESSION['carrito'] as $key=>$value){
    $producto = json_decode($value, false);
    echo $producto->id;
    if($producto->id == $id){
        unset($_SESSION['carrito'][$key]);
        header('location: ../21310362/vistaCarrito.php');
        die();
    }
}
?>