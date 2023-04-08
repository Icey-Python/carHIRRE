<?php
session_start();
include "config.php";
if(!($_SESSION['user_type'] == 'admin')){
    // user can view only a single report of the current purchase
  //  $car_id = $_GET['ref_id'];
    $sql = "SELECT * FROM cars WHERE id='$car_id'";
    $result = mysqli_query($con, $sql);
    if($result){
    while($row =mysqli_fetch_array($result)){
        $id = $row['id'];
        $image =$row['carImage'];
        $name = $row['carName'];
    }
    //$sql_insert= "INSERT INTO `report`(`transaction_id`, `status`, `name`, `car name`, `car price`) VALUES ('".$_SESSION['checkout_id']."','".$_SESSION['status']."','".$_SESSION['name']."','$name','".$_SESSION['total_cost']."')";
    //$result = mysqli_query($con, $sql_insert);
}
  }else{
    //admin can view all
  }

require('./fpdf/fpdf.php');
$pdf= new FPDF();
//add  a new page to the document
$pdf->AddPage();
//set font for the document
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Regie motors',0, 1, 'c' );



$pdf->Output('receipt.pdf', 'D');
?>