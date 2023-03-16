<?php
include "config.php";
session_start();
$price = intval($_SESSION['price']);
$number = intval($_POST['days']);
$total = intVal($price) * intVal($number);
$_SESSION['total_cost'] = $total;
$id = $_SESSION['id'];
$booked = mysqli_query($con,"UPDATE cars set booked_for='$number'where id='$id'");
if(!$booked){
   echo "Some error occured" ;
}else{
   header("location: payment.php");
}
?>