<?php

    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $fecha=date("d-m-y");
    $hora=date("h:m a");
    $ruta2 = "../archivos/pedidos.csv";
    

    require("../reportes/fpdf/fpdf.php");
    
    class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    $this->SetFont('Arial','B',18);
    
    $this->Cell(60);// Movernos a la derecha
    
    $this->Cell(80,15,'Reporte de Pedidos',1,0,'C');// Título
    
    $this->Ln(20);// Salto de línea
}

// Pie de página
function Footer()
{
    
    $this->SetY(-15);// Posición: a 1,5 cm del final
   
    $this->SetFont('Arial','I',8); // Arial italic 8
    
    $this->Cell(0,10,utf8_decode('Pagina').$this->PageNo().'/{nb}',0,0,'C');// Número de página
}
}

$pdf = new PDF();//variable establecida
$pdf ->AliasNbPages();
$pdf->AddPage();
    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(25,5);
    $pdf->Cell(12,20,'Fecha: '.$fecha,0,1,'C');
    $pdf->SetFont('Arial','B',12);
    $pdf->SetFont('Arial','B',12);
    $pdf->SetXY(12,20);
    $pdf->Cell(32,10,'Hora: '.$hora,0,1,'C');
    $pdf->SetFont('Arial','B',40);
    $pdf->SetXY(45,40);
    $pdf->Cell(160,10,utf8_decode('Sabrosón'),0,1,'C');

    $pdf->SetFont('Arial','B',20);
    $pdf->SetXY(30,60);

    $pdf->Cell(150,10,'Reporte de Pedidos',1,1,'C');
    
    $pdf->SetXY(30,70);
    $pdf->SetFont('Arial','B',8);

    $pdf->Cell(25,10,'PRODUCTOS',1,0,'C');
    $pdf->Cell(25,10,'PRECIO',1,0,'C');
    $pdf->Cell(25,10,'DIRECCIÓN',1,0,'C');
    $pdf->Cell(25,10,'LOCALIDAD',1,1,'C');
    $pdf->Cell(25,10,'ESTADO',1,0,'C');
    $pdf->Cell(25,10,'HORA DE PEDIDO',1,1,'C');

    $pdf->SetXY(30,80);
    $pdf->SetFont('Arial','B',16);
    
    $archivo=fopen($ruta2,'r');
    while($campos=fgetcsv($archivo,999)){
        foreach($campos as $campo){
            $pdf->Cell(150,10,$campo,1,2,'C');
         }
    }
    fclose($archivo);
    
    $pdf->Output();


?>