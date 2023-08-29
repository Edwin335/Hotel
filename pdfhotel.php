<?php

   require 'FPDF/fpdf.php';

  class PDF extends FPDF
  {

  	function Header()
  	{
  		$this->SetFont('Arial','B',15); //con this llamamos todas las funciones con esta clase
  		$this->Cell(35,30, 'Cliente',0,0,'L');
      $this->Cell(148,30, 'Remitente',0,0,'R');

  		$this->Ln(20);
  	}

  	function Footer()
  	{
  		$this->SetY(-15);
  		$this->SetFont('Arial','I',8);
  		//$this->Cell(0,10, 'Pagina '$this->PageNo().'/{nb}',0,0,'C' ); Numero del pie de pagina
  		$this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');

  	}



  }


?>