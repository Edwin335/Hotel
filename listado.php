<!DOCTYPE html>
<html>
<head>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Estedwin</title>
</head>
<body>
	<center>
        <ul class="menu">
            <li><a href="index.php">Registro Huésped</a></li>
            <li><a href="listado.php"style="background: #3444E2; color: white;">Listado de Huéspedes</a></li>
        </ul> 
    </center>

    <br><br>

 <form method="post">   
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ocupacion</th>
    </tr>
  </thead>

  <?php

  include("conexion.php");


  $resultado = mysqli_query($conex,"SELECT cliente.nombre, cliente.apellido, cliente.cedula as cedula, cliente.telefono, cliente.ocupacion FROM cliente");
  $conteo =1;
  $conte2 =1;
  while ($consulta = mysqli_fetch_array($resultado)) {
$cedu = $consulta['cedula'];

  	echo "
  	<tbody>
    <tr>
      <td>".$conteo++."</td>
      <td>".$consulta['nombre']."</td>
      <td>".$consulta['apellido']."</td>
      <td>".$consulta['cedula']."</td>
      <td>".$consulta['telefono']."</td>
      <td>".$consulta['ocupacion']."</td>
      
      <td><a style='text-decoration: none; color: black; background: #ECE7E6; padding: 5px; border-radius:7px;' href='pago.php?id=".$consulta['cedula']."'>Consultar</a></td>
    </tr> 
  </tbody>";
  	
  }


  ?>
</table>
</form>



</body>
</html>