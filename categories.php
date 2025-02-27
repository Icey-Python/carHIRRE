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
    <link rel="stylesheet" href="./categories.php">
    <title>car rental management system</title>
  </head>
  <body style="background-image: url('./assets/machine9.jpg'); background-blend-mode: normal;
    background-size: cover; height: 100vh;">
    <h1 class="text-center text-light pt-5 pb-5"> Please check our available cars</h1>
  <div class="container w-100 style='margin:50px;'">
    <button ></button>
  <?php
   include 'config.php';
   $sql = "SELECT * FROM cars";
   $result = mysqli_query($con, $sql);
  if($result){
  while($row =mysqli_fetch_array($result)){
  
       $id = $row['id'];
      $image =$row['carImage'];
      $name = $row['carName'];
      $price = $row['carPrice'];
       echo"
        <div class= 'col-xxl-10'>
      <div class='card boarder-info  my-3 mx-3' style=' width:350px; height:450px; float:left;' > 
      <img class='card-img-top max-width-100% h-50 object-fit-cover' src=  '$image' style:'height: 100px; position: absolute;  max-width:100%;'>
     
   <div class=' card-body'>
       <h4 class='card-tittle'> Name:  $name </h4>
       <br>
       <h4 class='card-tittle'> Price:   $price / day</h4>
   <a href='book.php?id=$id'  class= 'btn btn-danger btn-block btn-lg p-2' > Book Now </a>
   </div>
   </div>
   </div>
</div>
    ";
  }
}
mysqli_error($con);


?>
  </div>
  
</body>
</html>