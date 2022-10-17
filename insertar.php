<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$identificacion=$_POST['identificacion'];
$nombre_completo=$_POST['nombre_completo'];
$edad=$_POST['edad'];
$sexo=$_POST['sexo'];
$Telefono=$_POST['Telefono'];
$direccion=$_POST['direccion'];

$sql="INSERT INTO personal VALUES('$id','$identificacion','$nombre_completo','$edad','$sexo','$Telefono', '$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>