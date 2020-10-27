<?php
$con=mysqli_connect('localhost','admin','admin','libreria');
if($con){
    echo "Conectado";
}else{
    echo "No conectado";
}