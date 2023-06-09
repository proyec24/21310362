<?php
session_start();
if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=array();
}
include'class.php';
include'bd/conexion.php';
$id = $_POST['id'];
$query = "SELECT * FROM productos WHERE id = '$id'";
$resul = $con->query($query);
foreach($_SESSION['carrito'] as $key=>$value){
    $producto = json_decode($value, false);
    if($producto->id == $id){
        header('location: ../21310362/Productos.php');
        die();
    }
}
$prod= $resul->fetch_assoc();
$_SESSION['carrito'][]= json_encode(new carritoP($id, $prod['precio']));
header('location: ../21310362/Productos.php');
?>