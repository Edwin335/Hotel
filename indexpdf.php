<?php

$cedula_cliente2 = $_GET['id'];

    include 'pdfhotel.php';
    include("conexion.php");

    $resultado = mysqli_query($conex,"SELECT cliente.nombre, cliente.apellido FROM cliente WHERE cliente.cedula = '$cedula_cliente2'");

    $resultado2 = mysqli_query($conex,"SELECT tipohabitacion.descripcion_tipoh, tipohabitacion.capacidad, DATEDIFF(reserva.fecha_salida, reserva.fecha_llegada) AS Dias_hospedaje, tipohabitacion.precio_tipoh, DATEDIFF(reserva.fecha_salida, reserva.fecha_llegada) * tipohabitacion.precio_tipoh AS Precio_a_pagar FROM reserva INNER JOIN cliente ON reserva.cedula = cliente.cedula INNER JOIN tipohabitacion ON reserva.id_tipoh = tipohabitacion.id_tipoh WHERE cliente.cedula = '$cedula_cliente2'");

    $pdf = new PDF();
    //$pdf->AliasPages();
    $pdf->AddPage(); //agregar pagina


    //$pdf->SetFillColor(232,232,232);
    //$pdf->SetFont('Arial','B','12');
    //$pdf->Cell(50,6,'Nombre',1,0,'C',1);
    //$pdf->Cell(50,6,'Apellido',1,0,'C',1);
    //$pdf->Cell(50,6,'Cedula',1,1,'C',1);

    $pdf->SetFont('Arial','',10);
    $pdf->Line(12, 15, 200, 15);
     while ($consulta = mysqli_fetch_array($resultado))
     {
     	  $pdf->Cell(35,6,$consulta['nombre'].' '.$consulta['apellido'],0,0,'L');
        $name = $consulta['nombre'];
        $ape = $consulta['apellido'];  
     }
     $pdf->Cell(148,6,'Hotel Los Pinos',0,0,'R');
     $pdf->Line(12, 45, 200, 45);
     $pdf->Ln(20);
      
     while ($consulta2 = mysqli_fetch_array($resultado2))
     {
        $pdf->Cell(35,8, 'Descripcion:',0,0,'L');
        $pdf->Cell(148,8,utf8_decode($consulta2['descripcion_tipoh']),0,1,'R');

        $pdf->Cell(35,8, 'Capacidad de personas:',0,0,'L');    
        $pdf->Cell(148,8,$consulta2['capacidad'],0,1,'R');

        $pdf->Cell(35,8, 'Dias de hospedaje:',0,0,'L');    
        $pdf->Cell(148,8,$consulta2['Dias_hospedaje'],0,1,'R');

        $pdf->Cell(35,8, 'Percio Habitacion:',0,0,'L');
        $pdf->Cell(148,8,$consulta2['precio_tipoh'],0,1,'R');

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(35,8, 'Precio Total:',0,0,'L');
        $pdf->Cell(148,8,$consulta2['Precio_a_pagar'],0,1,'R');
     }
      $pdf->Line(12, 93, 200, 93);
 
      $modo = "I";

    $pdf->Output('Factura_Pago_'.$name.'_'.$ape.'.pdf','I');
?>	