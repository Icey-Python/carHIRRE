<?php

include 'header.php';
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--<link rel="stylesheet" href="categories.css">-->
    <title>car rental management system</title>
  </head>
  <body class="bg-info">
    <h1 class="text-center pt-5 pb-5"> Please check our available cars</h1>

   <?php
   include 'config.php';
   $sql = "SELECT*FROM cars";
   $result = mysqli_query($con, $sql);
   if($result){
    while($row =mysqli_fetch_array($result)){
       $id = $row['id'];
      $carImage = $row['carImage'];
      $name = $row['carName'];
      $price = $row['carPrice'];
       echo'
   <div class="container">
    <div class="row col-lg-4 mt-3 mb-3">
  
  <div class="card-deck" >
   <div class="card boarder-info p-2" style= "height:500px; width; 500px"> 
   <img class="card-img-top" src= "./images/'.$carImage.'" / style="height: 300px;">

<br>
<br>
<br>
<div class=" card-body">
    <h4 class="card-tittle"> Name: ' . $name . '</h4>
    <br>
    <h4 class="card-tittle"> Price:  ' . $price . ' / day</h4>
<a href="order.php? orderid=' . $id . ' "  class= "btn btn-danger btn-block btn-lg p-2" > Book Now </a>
</div>
  </div>
  </div>
 </div>
 </div>
 ';
  
 } 
  }else mysqli_error($con);
?>
</body>
</html>