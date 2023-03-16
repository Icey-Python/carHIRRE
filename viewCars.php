<?php
include 'config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <body>
    <div class="container my-5">
<button class= "btn btn-primary"><a href="addCar.php" class= "text-dark">add car</a></button>
<table class="table my-2">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">carImage</th>
      <th scope="col">CarName</th>
      <th scope="col">carPrice</th>
      <th scope = "col">action</th>
    </tr>
  </thead>
 
<tbody>
  
<?php


$sql = "SELECT * FROM cars WHERE booked_for IS NULL";
    $result = mysqli_query($con, $sql);
    if($result){
      while($row =mysqli_fetch_array($result)){
        $id = $row['id'];
        $Cimage = $row['carImage'];
        $Cname = $row['carName'];
        $Cprice = $row['carPrice'];
        $Cbookings = $row['booked_for'];
        echo"
        <tr>
        <th scope='row'>".$id."</th>
        <td> <img style='width:60px; height:50px; object-fit:cover;' src='".$Cimage."'/></td>
        <td> ".$Cname."</td>
        <td>".$Cprice."</td>
        <td>".$Cbookings."</td>
        <td>
  <button class = 'btn btn-primary'><a href='addcar.php? id=
  '".$id."' ' class ='text-light'>update</a></button>
  <button class = 'btn btn-danger'><a href='delete.php? deleteid= '".$id."' class = 'text-light'>delete</a></button>
</td>
      </tr>";
      }
    }
?>

  </tbody>
</table> 

    </div>
  </body>
</html>
