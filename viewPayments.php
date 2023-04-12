<?php
include 'config.php';
include 'dashboard.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CAR RENTAL MANAGEMENT SYSTEM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <body>
    <div class="container d-flex justify-content-end" style="width:60%;height:100vh;overflow-y:scroll;-ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */">
<!--<button class= "btn btn-primary"><a href="addCar.php" class= "text-dark">add car</a></button>-->
<table class="table " style="font-size:16px;">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">transactionId</th>
      <th scope="col">status</th>
      <th scope="col">Name</th>
      <th scope = "col">car Name</th>
      <th scope = "col">Price</th>
    </tr>
  </thead>
 
<tbody>
  
<?php

    $sql = "SELECT * FROM report";
    $result = mysqli_query($con, $sql);
      while($row =mysqli_fetch_array($result)){
        $id = $row['id'];
        $tid = $row['transaction_id'];
        $status = $row['status'];
        $name = $row['name'];
        $cname = $row['car name'];
        $cprice= $row['car price'];
        echo"
        <tr>
        <th scope='row'>".$id."</th>
        <td style='font-size:14px;'>".$tid."</td>
        <td>".$status."</td>
        <td>".$name."</td>
        <td>".$cname."</td>
        <td>".$cprice."</td>
        
      </tr>";
      }
    
?>

  </tbody>
</table> 


    </div>
  </body>
</html>
