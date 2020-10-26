<?php
    session_start();
$response= new stdclass();
if(!isset($_SESSION['codusu'])){
    $response->state=false;
    $response->detail="No esta logueado";
    $response->open_login=true;
}else{
    $response->state=true;
    $response->detail="Esta logueado";
}
$response->datos=$datos;

mysqli_close($con);
header('Content-Type: application/json');
echo json_encode($response);
?>