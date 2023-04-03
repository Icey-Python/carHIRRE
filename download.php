<?php
require('./fpdf/fpdf.php');


// Create new FPDF instance
$pdf = new FPDF();

// Open file
$file = fopen($_SERVER['DOCUMENT_ROOT'].'/viewReports.php', 'r');

// Read file
while(!feof($file)){
    // Read line
    $line = fgets($file);

    // Add line to PDF document
    $pdf->AddPage();
    $pdf->Write(5, $line);
}

// Close file
fclose($file);

// Output PDF
$pdf->Output();
?>