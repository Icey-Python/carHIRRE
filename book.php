<?php
include 'header.php';
include "config.php";
if(isset($_GET['id'])){
  $id =$_GET['id'];
  $sql= "SELECT * FROM cars WHERE id= $id";
  $result= mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $carName = $row['CarName'];
  //var_dump($row);
  //echo($row['carName']);
  $carPrice = $row['carPrice'];
  $NoDays= "<script> number</script>";
  echo($NoDays);
  //$total= $NoDays * intval(substr($carPrice,4,strlen($carPrice)-1));
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
      <div class="row justify-content-center w-100">
        <div class="col-md-8 my-5">
          <h2 class="text-center p-2 text-primary">Fill the following details to complete your booking</h2>
          <img src="<?php echo $cimage?>" class="w-100 p-0 pb-3 rounded-1" >
        <h3>Car Details:</h3>
        <table class="table table-bordered p-3" width= "500px">
          <tr>
            <th>Car Name:</th>
              <td><?php echo $row['carName']?></td>
          </tr>
          <tr>
            <th>Charges per Day:</th>
              <td><?php echo $carPrice ?></td>
          </tr>
        </table>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Number of days</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number of days" required>
            </div>
            <button type="submit" name='calculate_total' class="btn btn-primary">Calculate total</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
