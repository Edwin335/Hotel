<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Estedwin</title>
</head>
<body>

    <center>
        <ul class="menu">
            <li><a href="index.php" style="background: #3444E2; color: white;">Registro Huésped</a></li>
            <li><a href="listado.php">Listado de Huéspedes</a></li>
        </ul> 
    </center>



	<section class="h-100 h-custom gradient-custom-2">
    <form method="post">




  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">Informacion Huésped</h3>

                  <!-- <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Title</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      <option value="4">Four</option>
                    </select>
                  </div> -->

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev2" >Nombre</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="Nombre" name="nombre" />
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev3">Apellido</label>
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" placeholder="Apellido" name="apellido" />
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev2" >Cedula</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="Cedula" name="cedula" />
                      </div>

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev2" >Ciudad Origen</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="Ciudad" name="ciudadOrigen"/>
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev3">Departamento Origen</label>
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" placeholder="Departamento" name="departamentoOrigen" />
                      </div>

                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev2" >Telefono</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="Telefono" name="telefono"/>
                      </div>

                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      	<label class="form-label" for="form3Examplev2" >Ocupacion</label>
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" placeholder="Ocupacion" name="ocupacion"/>
                      </div>

                    </div>
                  </div>             
                </div>
              </div>




              <div class="col-lg-6 bg-indigo text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Informacion Reserva</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <label class="form-label" for="form3Examplea2">Fecha llegada</label>
                      <input type="date" id="form3Examplea2" class="form-control form-control-lg" value="2022-11-10" name="fechaLlegada"/>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                    	<label class="form-label" for="form3Examplea3">Fecha salida</label>
                      <input type="date" id="form3Examplea3" class="form-control form-control-lg" value="2022-11-10" name="fechaSalida"/>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <select class="select" name="select">
                      <option value="1">Habitacion matrimonial</option>
                      <option value="2">Habitacion familiar</option>
                      <option value="3">Habitacion basica</option>
                    </select>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                      	<label class="form-label" for="form3Examplea4">Cedula cliente</label>
                        <input type="text" id="form3Examplea4" class="form-control form-control-lg" placeholder="Cedula" name="cedulaDos"/>
                      </div>

                    </div>
                    
                  </div>
                  <button type="submit" style="margin-top: 100px;" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark" name="registrar" value="Registrar">Registrar</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>

</section>



<?php
include("conexion.php");
if (isset($_POST['registrar'])){
  if (strlen($_POST['nombre'])>=1 && strlen($_POST['apellido'])>=1 && strlen($_POST['cedula'])>=1 && strlen($_POST['ciudadOrigen'])>=1 && strlen($_POST['departamentoOrigen'])>=1 && strlen($_POST['telefono'])>=1 && strlen($_POST['ocupacion'])>=1 && strlen($_POST['fechaLlegada'])>=1 && strlen($_POST['fechaSalida'])>=1 && strlen($_POST['select'])>=1 && strlen($_POST['cedulaDos'])>=1){

    $cedula = trim($_POST['cedula']);
    $cedulaDos = trim($_POST['cedulaDos']);

    if ($cedula == $cedulaDos) {


  $nombre = trim($_POST['nombre']);
  $apellido = trim($_POST['apellido']);
  $cedula = trim($_POST['cedula']);
  $ciudadOrigen = trim($_POST['ciudadOrigen']);
  $departamentoOrigen = trim($_POST['departamentoOrigen']);
  $telefono = trim($_POST['telefono']);
  $ocupacion = trim($_POST['ocupacion']);
  $fechaLlegada = trim($_POST['fechaLlegada']);
  $fechaSalida = trim($_POST['fechaSalida']);
  $select = trim($_POST['select']);
  $cedulaDos = trim($_POST['cedulaDos']);

  $consulta = "INSERT INTO cliente(nombre, apellido, cedula, ciudad_origen, departamento_origen, telefono, ocupacion)  VALUES ('$nombre','$apellido','$cedula','$ciudadOrigen','$departamentoOrigen','$telefono','$ocupacion')";
  $resultado = mysqli_query($conex, $consulta);

  $consultaDos = "INSERT INTO reserva(fecha_llegada, fecha_salida, id_tipoh, cedula)  VALUES ('$fechaLlegada','$fechaSalida','$select','$cedulaDos')";
  $resultadoDos = mysqli_query($conex, $consultaDos);

      
    }else {
      echo '<script>alert("Las dos cedulas no son iguales")</script>';
    
  }




  }else {
      echo '<script>alert("Digite todos los campos")</script>';
    
  }
  
}

  
?>

<!-- ------------------------------------------------------- -->

</body>
</html>