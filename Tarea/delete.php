<?php

include("conexion.php");
$con=conectar();

$Cedula=$_GET['id'];

$sql="DELETE FROM usuario  WHERE Cedula='$Cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: repuestos.php");
    }
?>
