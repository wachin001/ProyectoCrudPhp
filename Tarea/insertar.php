<?php
include("conexion.php");
$con=conectar();

$Cedula=$_POST['Cedula'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$Repuesto=$_POST['Repuesto'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO usuario VALUES('$Cedula','$nombre','$correo','$Repuesto','$cantidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>