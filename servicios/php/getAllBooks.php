<?php
    $con=mysqli_connect('localhost','id14883820_adminlibreria','G@1=*pLKT&sn=AK%','id14883820_libreria');
    $response=new stdClass();

    $datos=[];
    $i=0;
    $sql="Select nombre,precio,descripcion,imagen from Libros ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
        $obj=new stdClass();
      //  $obj->id=$row['id'];
        $obj->nombre=$row['nombre'];
        //$obj->editorial=$row['editorial'];
        //$obj->autor=$row['autor'];
        $obj->precio=$row['precio'];
        $obj->descripcion=$row['descripcion'];
        //$obj->cantidad=$row['cantidad'];
        //$obj->proveedores=$row['provedores'];
        $obj->imagen=$row['imagen'];
        $datos[$i]=$obj;
        $i++;
    }
    $response->datos=$datos;
  
    mysqli_close($con);
    header('Content-Type: application/json');
    echo json_encode($response);
    ?>