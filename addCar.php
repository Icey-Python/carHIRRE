<?php
session_start();
include "header.php";
include 'config.php';
if(!($_SESSION['user_type'] == 'admin')){
  header("location:categories.php");
}
$msg = "";
if (isset($_POST['submit'])) {

    /* $target_dir = "car rental management system/images/";
    $target_file = $target_dir . basename($_FILES['carImage']["name"]);
    $move_uploaded_file($_FILES['']["tmp_name"], $target_file);
    print_r($_FILES);
    */

    $target = "images/" . basename($_FILES['carImage']["name"]);
  
    $car_image = "./images/".$_FILES['carImage']['name'];
    move_uploaded_file($_FILES['carImage']['tmp_name'], $target);
    $Cname = $_POST['carName'];
    $Cprice = $_POST['carPrice'];
    $sql = "INSERT INTO cars (carImage, carName, carPrice)
    VALUES('$car_image', '$Cname',' $Cprice')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "car information added to the database successfully!";

    } else {
   
        die(mysqli_error($con));
     }
    }

?>









<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>car rental management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-info">
    <div class="container">
<div class="row justify-content-center">
<div class="col-md-10 bg-light mt-5 rounded">
<h2 class="text-center text-dark p-2">Add car information</h2>
<form action="addCar.php" method="post" class="p-2" enctype="multipart/form-data" id = "form-box">
  <div class="form-group p-2">
    <div class="custom-file">
    <input type="file" name= "carImage" class= "custom-file-input" id= "customFile" required>
    <label for="customFile" class="custom-file-label">Choose Car Image</label>
</div>
</div>  
  <div class="form-group p-2">
    <input type="text" name= "carName" class= "form-control" placeholder="Enter car name "required >
  </div>  
  <div class="form-group p-2">
    <input type="text" name= "carPrice" class= "form-control" placeholder="Enter price per day "required >
  </div> 
  <div class="form-group p-2">
    <input type="submit" name= "submit" class= "btn btn-danger btn-block btn-lg" value="Add">
  </div>
  <div class="form-group p-2">
    <h4 class="text-center"><?php echo $msg; ?></h4>
  </div>
</form>
</div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6 mt-3 p-4 bg-light text-center rounded">
<a href="categories.php" class="btn btn-warning btn-block btn-lg ">Go to the product page</a>
    </div>
</div>
 </div>
    


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>