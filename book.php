<?php
include 'header.php';
require "config.php";
if(isset($_GET['id'])){
$id =$_GET['id'];
$sql= "SELECT * FROM cars WHERE id= $id";
$result= mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$carName = $row['CarName'];
$carPrice = $row['carPrice'];
$NoDays= '?';
$total= $carPrice*$NoDays;
$cimage= $row['carImage'];
}
else{
  echo'the car is not available';
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="book.css">
    <title>car rental management system</title>
  </head>
  <body>
    <div clas="container">
      <div class="row justify-content-center">
        <div class="col-md-8 my-5">
          <h2 class="text-center p-2 text-primary">Fill the following details to complete your booking</h2>
        <h3>Car Details:</h3>
        <table class="table table-bordered p-3" width= "500px">
          <tr>
            <th>Car Name:</th>
              <td><?php echo $carName ?></td>
          </tr>
          <tr>
            <th>Charges per Day:</th>
              <td><?php echo $carPrice ?></td>
          </tr>
          <tr>
            <th>Number of days:</th>
              <td><?php echo $NoDays ?></td>
          </tr>
          <tr>
            <th>Total Amount:</th>
              <td><?php echo $total ?></td>
          </tr>
          
        </table>
        </div>
      </div>
    </div>
  </body>
</html>
