<?php

class PDF extends FPDF
{
    function Header()
    {
        //LOGO
        $this->Image('public/img/logo.png', 8, 2, 80);
        
        //Line Break
        $this->Ln(20);
    }

    
}

$pdf = new PDF('P', 'mm', 'A4');

$pdf->AddPage();
$pdf->SetFont('Helvetica', '', 11);
$pdf->SetTextColor(0);
foreach($dataList->getUserResults() as $row)
 $pdf->Text(120,38, $row['Nom'].' '.$row['Prenom']);


$pdf->Output();
