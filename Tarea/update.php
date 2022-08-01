<?php

include("conexion.php");
$con=conectar();

$Cedula=$_POST['Cedula'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$Repuesto=$_POST['Repuesto'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE usuario SET  Cedula='$Cedula',nombre='$nombre',correo='$correo',cantidad='$cantidad' WHERE Cedula='$Cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: repuestos.php");
    }
?>