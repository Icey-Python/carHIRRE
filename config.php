<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car-rental";
$con = new mysqli('localhost', 'root', '', 'car-rental');
if(!$con){
     die(mysqli_error($con));
}
?>