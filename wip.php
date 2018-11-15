<?php
require 'models/fpdf181/fpdf.php';

class PDF extends FPDF
{
    function Header()
    {
        //LOGO
        $this->Image('public/img/logo.png', 10, 6, 30);
        //Font Title
        $this->SetFont('Arial', 'B', 15);
        //Move to the right
        $this->Cell(80);
        //Title
        $this->Cell(30, 10, 'Main Title', 1, 0, 'C');
        //Line Break
        $this->Ln(20);
    }

    
}

$pdf = new PDF();

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40,10, 'Hello World');
$pdf->Cell(60,10,'Powered by FPDF.',0,1,'C');
$pdf->Ln(10);
for($i=1;$i<=10;$i++)
    $pdf->Cell(0,10,'Here we have line # '.$i, 0, 1);
$pdf->Output();
