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
            <li><a href="index.php">Registro Cliente</a></li>
            <li><a href="listado.php">Listado Clientes</a></li>
        </ul> 
    </center>

    <br><br>

    
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Telefono</th>
      <th scope="col">Ocupacion</th>

      <th scope="col">Ciudad de origen</th>
      <th scope="col">Departamento origen</th>
    </tr>
  </thead>



  <?php

  include("conexion.php");

$cedula_cliente = $_GET['id'];


  	$resultado = mysqli_query($conex,"SELECT cliente.nombre, cliente.apellido, cliente.cedula, cliente.telefono, cliente.ocupacion, cliente.ciudad_origen, cliente.departamento_origen, reserva.fecha_llegada, reserva.fecha_salida, tipohabitacion.nombre_tipoh, tipohabitacion.descripcion_tipoh, tipohabitacion.capacidad, tipohabitacion.precio_tipoh, DATEDIFF(reserva.fecha_salida, reserva.fecha_llegada) * tipohabitacion.precio_tipoh AS Precio_a_pagar FROM reserva INNER JOIN cliente ON reserva.cedula = cliente.cedula INNER JOIN tipohabitacion ON reserva.id_tipoh = tipohabitacion.id_tipoh WHERE cliente.cedula = '$cedula_cliente'");

 while ($consulta = mysqli_fetch_array($resultado)) {


  	echo "
  	<tbody>
    <tr>
      <td>".$consulta['nombre']."</td>
      <td>".$consulta['apellido']."</td>
      <td>".$consulta['cedula']."</td>
      <td>".$consulta['telefono']."</td>
      <td>".$consulta['ocupacion']."</td>

      <td>".$consulta['ciudad_origen']."</td>
      <td>".$consulta['departamento_origen']."</td>
      </tr> 
    </tbody> 


    <thead>
    <tr>
      <th scope='col'>Fecha de llegada</th>
      <th scope='col'>Fecha de salida</th>
      <th scope='col'>Tipo habitacion</th>

      <th scope='col'>Descripcion habitacion</th>
      <th scope='col'>Capaciad</th>
      <th scope='col'>Precio habitacion</th>
      <th scope='col'>Precio total a pagar</th>
    </tr>
  </thead>

    <tbody>
    <tr> 
      <td>".$consulta['fecha_llegada']."</td>
      <td>".$consulta['fecha_salida']."</td>
      <td>".$consulta['nombre_tipoh']."</td>

      <td>".$consulta['descripcion_tipoh']."</td>
      <td>".$consulta['capacidad']."</td>
      <td>".$consulta['precio_tipoh']."</td>
      <td>".$consulta['Precio_a_pagar']."</td>
      </tr> 
    </tbody>
    
  ";
  	
  }
  
    echo "

  <td><a style='text-decoration: none; color: black; background: #ECE7E6; padding: 5px; border-radius:7px;' href='indexpdf.php?id=".$cedula_cliente."'>Pagar</a></td>

  ";


  ?>

</table>




</body>
</html>