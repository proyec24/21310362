<?php
include 'bd/conexion.php';
$json = json_decode(file_get_contents('php://input'));
$correo = $json->correo;
$pass = $json->password;
$query = mysqli_query($con, "SELECT * FROM usuarios where correo = '$correo' and pass = '$pass'");
$cont = mysqli_num_rows($query);
if($cont==1){
    session_start();
    $usuario = $query->fetch_assoc();
    $array= array("type"=>"".$usuario["auth"], "id_usuario"=>$usuario["id"], "session_id"=> session_id());
    $_SESSION["gamerly_user"]=json_encode($array);
    http_response_code(200);
    if($usuario["auth"] == 2){
        echo json_encode($array);
    }
    echo json_encode($array);
}else{
    http_response_code(401);
}
?>
