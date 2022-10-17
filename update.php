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

$sql="UPDATE personal SET  id='$id',identificacion='$identificacion',nombre_completo='$nombre_completo',edad='$edad',sexo='$sexo',Telefono='$Telefono',direccion='$direccion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>