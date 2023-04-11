<?php
session_start();
require('./fpdf/fpdf.php');
$pdf= new FPDF();
//add  a new page to the document
$pdf->AddPage();
//set font for the document
$pdf->SetFont('Arial', 'B', 14);
$pdf->SetTextColor(67, 66, 80);

##############################################################################################
//replace the path with the paths to Receipt Invoice in assets/Receipt
// right click on the image and click on copy path then paste here
$pdf->Image('./assets/Receipt/Receipt Invoice.png', 0, 0, 210, 0);

//replace the path with the paths to Mpesa logo in assets/Receipt
// right click on the image and click on copy path then paste here
$pdf->Image('./assets/Receipt/MPESA_logo.png', 140, 155, 20, 0);

##############################################################################################
//receiptNumber
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(130,57);
$pdf -> Cell(20, 10, "#".$_SESSION['checkout_id']);

//orderNumber
$pdf->SetFont('Arial', '', 10);
$pdf->SetXY(30,92);
$pdf -> Cell(20, 10, $_SESSION['checkout_id']);
$pdf->SetFont('Arial', '', 14);
//timestamp
$pdf->SetXY(130,92);
$pdf -> Cell(20, 10, substr($_SESSION['time'],0,4)."-".substr($_SESSION['time'],4,2)."-".substr($_SESSION['time'],6,2)."  ".substr($_SESSION['time'],8,2).":".substr($_SESSION['time'],10,2).":".substr($_SESSION['time'],12,2));

//userName
$pdf->SetXY(50,125);
$pdf -> Cell(20, 10, $_SESSION['name']);
//timestamp
$pdf->SetXY(130,125);
$pdf -> Cell(20, 10, substr($_SESSION['time'],0,4)."-".substr($_SESSION['time'],4,2)."-".substr($_SESSION['time'],6,2)."  ".substr($_SESSION['time'],8,2).":".substr($_SESSION['time'],10,2).":".substr($_SESSION['time'],12,2));

//carName
$pdf->SetXY(50,156);
$pdf -> Cell(20, 10, ucwords($_SESSION['car']));

//description
$pdf->SetXY(30,188);
$pdf -> Cell(20, 10, "Rental of ".ucwords($_SESSION['car']));
//QTY
$qty = intVal($_SESSION['total_cost']) / intVal($_SESSION['price']);
$pdf->SetXY(105,188);
$pdf -> Cell(20, 10, $qty);
//UNIT COST
$pdf->SetXY(130,188);
$pdf -> Cell(20, 10, $_SESSION['price']);
//NET COST
$pdf->SetXY(165,188);
$pdf -> Cell(20, 10, $_SESSION['total_cost']);
//TOTAL COST
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetXY(165,216);
$pdf -> Cell(20, 10, $_SESSION['total_cost']);







$pdf->Output('D', 'Receipt for #'.$_SESSION['checkout_id'].'.pdf');

?>