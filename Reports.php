<?php
session_start();
require('./fpdf/fpdf.php');
$pdf= new FPDF();
//add  a new page to the document
$pdf->AddPage();
//set font for the document
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Regie motors',0, 1, 'c' );



$pdf->Output();

?>