<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM personal WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="identificacion" placeholder="Identificacion" value="<?php echo $row['identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_completo" placeholder="Nombre_completo" value="<?php echo $row['nombre_completo']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo" value="<?php echo $row['sexo']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>