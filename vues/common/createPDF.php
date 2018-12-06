<?php
require 'models/fpdf181/fpdf.php';
/* require 'models/fpdf181/html_table.php'; */
$db = Projet5\models\Database::dbconnect();


class PDF extends FPDF
{
    function Header()
    {
        //LOGO
        $this->Image('public/img/logo.png', 8, 2, 80);
        
        //Line Break
        $this->Ln(20);
    }

    function topRdata($db)
    {
        $sql = 'SELECT id, nom, prenom, email
            FROM users  
            WHERE nom = :userNom AND prenom = :userPrenom';
                
        $req = $db->prepare($sql);
        $req->bindValue(':userNom', $_SESSION['nom'], \PDO::PARAM_STR);
        $req->bindValue(':userPrenom', $_SESSION['prenom'], \PDO::PARAM_STR);
        $req->execute();
        $row = $req->fetch();


        $this->Text(120, 38, utf8_decode($row['nom']). ' '.utf8_decode($row['prenom']));
        $this->Text(120, 43, utf8_decode($row['email']));

        $req->closeCursor();
    }

    function headerTable()
    {
        
        $this->SetFont('Times', 'B', 12);
        $this->SetY(60);
        $this->Cell(60, 10,'Examen', 1, 0,'C');
        $this->Cell(50, 10,'Vos Resultats', 1, 0,'C');
        $this->Cell(50, 10,'Normes', 1, 0,'C');
        $this->Ln();
    }

    

    function viewTable($db)
    {
        $this->SetFont('Times', '', 12);
        $req2 = $db->prepare('SELECT * FROM datauser WHERE Nom = :userNom AND Prenom = :userPrenom');
        $req2->bindValue(':userNom', $_SESSION['nom'], \PDO::PARAM_STR);
        $req2->bindValue(':userPrenom', $_SESSION['prenom'], \PDO::PARAM_STR);
        $req2->execute();

        while($row2 = $req2->fetch(\PDO::FETCH_OBJ))
        {
            $this->Cell(60,10,utf8_decode('Hématie'),1,0,'L');
            $this->Cell(50,10, $row2->Hematie.' M/mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(4.50 à 6.50)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Hémoglobine'),1,0,'L');
            $this->Cell(50,10, $row2->Hemoglob.' g/100ml',1,0,'C');
            $this->Cell(50,10,utf8_decode('(13.0 à 17.0)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Hématocrite'),1,0,'L');
            $this->Cell(50,10, $row2->Hemato.' %',1,0,'C');
            $this->Cell(50,10,utf8_decode('(40.0 à 54.0)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Polynucléaires Neutrophiles'),1,0,'L');
            $this->Cell(50,10, $row2->PN.' /mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(2 000 à 7 500)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Polynucléaires Eosinophiles'),1,0,'L');
            $this->Cell(50,10, $row2->PE.' /mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(< à 500)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Polynucléaires Basophiles'),1,0,'L');
            $this->Cell(50,10, $row2->PB.' /mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(< à 200)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Lymphocytes'),1,0,'L');
            $this->Cell(50,10, $row2->Lympho.' /mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(1 000 à 4 000)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Moncytes'),1,0,'L');
            $this->Cell(50,10, $row2->Monocy.' /mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(200 à 1 000)'),1,0,'C');
            $this->Ln();

            $this->Cell(60,10,utf8_decode('Paquettes'),1,0,'L');
            $this->Cell(50,10, $row2->Plaquette.' /mm3',1,0,'C');
            $this->Cell(50,10,utf8_decode('(150 000 à 400 000)'),1,0,'C');
            $this->Ln();
        }
    }

    
}


$pdf = new PDF('P', 'mm', 'A4');
$pdf->AddPage();
/* $pdf->Image('public/img/logo.png', 8, 2, 80); */
$pdf->SetFont('Helvetica', '', 11);
$pdf->SetTextColor(0);

$pdf->topRdata($db);    //
$pdf->headerTable();    // Display Content
$pdf->viewTable($db);   //

$pdf->Output('Document.pdf', 'I');
