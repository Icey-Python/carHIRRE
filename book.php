<?php
include 'header.php';
include "config.php";
if(isset($_GET['id'])){
  session_start();
  $id =$_GET['id'];
  $_SESSION['id'] = $id;
  $sql= "SELECT * FROM cars WHERE id= $id";
  $result= mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $carName = $row['CarName'];
  $_SESSION['car'] = $carName;
  //var_dump($row);
  //echo($row['carName']);
  $carPrice = $row['carPrice'];
  $_SESSION['price'] = $carPrice;
  $NoDays= 0;
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
          <img src="<?php echo $cimage?>" class="w-50 h-50 p-0 pb-3 rounded-3 mx-auto object-fit-cover" >
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
        <div class="row">
          <form class="col" action="setTotal.php" method="POST" id="form">
              <div class="form-group">
                <label for="exampleInputEmail1">Number of days</label>
                <input type="text" pattern="[0-9]{1-2}" class="form-control w-auto" id="days"  placeholder="Enter Number of days" max=30 name="days" required>
              </div>
              <button type="submit" name='calculate_total' class="btn btn-primary">Calculate total</button>
            </form>
            <p class="col">Your total price is: <b><span id="price">0</span></b></p>
        </div>
       
        </div>
      </div>
    </div>
    <script>
        let c_price=`<?php echo $carPrice?>`;
        let multiplier = document.getElementById('days');
        let price_total = document.getElementById('price');
        let form = document.getElementById("form");
        form.onsubmit=(e)=>{
          if(multiplier.value > 30){
            e.preventDefault();
            alert('Invalid number of days passed'); 
          }
        }
        multiplier.oninput=()=>{
          if(Number(multiplier.value)<=30){
            price_total.textContent =Number(c_price)*Number(multiplier.value);
          }
        }
    </script>
  </body>
</html>
