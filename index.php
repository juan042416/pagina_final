<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM personal";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>FORMULARIO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" src="css/estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <style>
            *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
            }

            .contenedor{
                width: 95%;
                margin: 30px auto;
               
                
            }

            .formulario{
                width: 25%;
                float:right;
                padding: 20px;
                background-color:yellow;
                position: relative;
                top:50px;
                
            }

            input{
                border-radius: 10px;
                height:20px;
               width: 290px;
            }

            .tabla{
                width: 75%;
                display:inline-block;
                float:right;
                position: relative;
                top:50px;
            }

            h1{
                font-size: 25px;
                text-align:center;
                padding:10px;
                text-shadow: 1px 1px 1px white;
            }

            table{
	            background-color: white;
	            text-align: left;
	            border-collapse: collapse;
	            width: 100%;
            }

            th, td{
	            padding: 10px;
            }

            thead{
	            background-color: #246355;
	            border-bottom: solid 5px #0F362D;
	            color: white;
            }

           tr:nth-child(even){
	           background-color: #ddd;
            }

            tr:hover td{
	           background-color: #369681;
	           color: white;
            }

            .btn{
			border-radius: 3px;
			display: inline-block;
			padding: 10px 15px;
			text-decoration: none;
			text-shadow: 0 1px 0 rgba(255,255,255,0.3);
			box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
            margin-bottom:10px;
		}
        .btn-green{
			color: white;
			background-color: #3CC93F;
		}

        .btn-blue{
			color: white;
			background-color: #2D508E;
		}

        .btn-red{
			color: white;
			background-color: #E42121;
		}

        tr th{
            color:white;
            font-weight:900;
        }

        @media (max-width:480px){
            .formulario, .tabla{
              
                display:block;
            }
        }

        
         </style>


    </head>
    <body>

    <header id="header">
					<h1  style="font-size: 14px"><a href="index.html">ENAMORATE  </a> DE TI MISMO</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li><a href="perfil.html">¿Quienes somos?</a></li>
							<li><a href="http://localhost/formulario/index.php" class="button">Aparta tu cita</a></li>
						</ul>
					</nav>
				</header>
            <div class="contenedor">
                    
                        <div class="formulario">
                            <h1>Datos formulario</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="hidden" class="form-control mb-3" name="id" placeholder="id">
                                    <p><input type="text" name="identificacion" placeholder="Identificación"></p>
                                    <p><input type="text"  name="nombre_completo" placeholder="Nombre Completo"></p>
                                    <p><input type="text"  name="edad" placeholder="Edad"></p>
                                    <p><input type="text" name="sexo" placeholder="Sexo"></p>
                                    <p><input type="text"  name="Telefono" placeholder="Telefono"></p>
                                    <p><input type="text" name="direccion" placeholder="Dirección"></p>
                                    <input type="submit" class="btn btn-green" value="Enviar">
                                </form>
                        </div>

                        <div >
                            <table class="tabla" >
                                <thead >
                                    <tr >
                                        <th>Identificación</th>
                                        <th >Nombre completo</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Telefono</th>
                                        <th>Dirección</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            $query=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                
                                                <td><?php echo $row['identificacion']?></td>
                                                <td><?php echo $row['nombre_completo']?></td>
                                                <td><?php echo $row['edad']?></td>
                                                <td><?php echo $row['sexo']?></td>
                                                <td><?php echo $row['Telefono']?></td>
                                                <td><?php echo $row['direccion']?></td>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-blue">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-red">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                     
            </div>
    </body>
    
</html>