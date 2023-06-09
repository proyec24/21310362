<?php
include 'bd/conexion.php';
$json = json_decode(file_get_contents('php://input'));
if(session_start(array($json->session_id))){
    http_response_code(200);
    if(isset($_SESSION["gamerly_user"])){
        echo $_SESSION["gamerly_user"];
        exit;
    }
    echo http_response_code(401);
    exit;
}
    http_response_code(401);
?>
