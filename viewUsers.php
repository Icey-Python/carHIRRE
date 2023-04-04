<?php
include 'config.php';
include 'dashboard.php';
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
    <div class="container mx-5 my-5 " style="padding-left:13%;">
    <button class= "btn btn-primary"><a href="signuppage.php" class= "text-dark">add user</a></button>
<table class="table my-2">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">IDNO.</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">USERTYPE</th>
      <th scope = "col">ACTION</th>
      
    </tr>
  </thead>
 
<tbody>
  
<?php


$sql = "SELECT * FROM users";
    $result = mysqli_query($con, $sql);
    if($result){
      while($row =mysqli_fetch_array($result)){
        $id = $row['id'];
        $name = $row['name'];
        $identify= $row['identificationNo'];
        $email = $row['email'];
        $password = $row['password'];
        $usertype = $row['usertype'];
        echo"
        <tr>
        <th scope='row'>".$id."</th>
       
        <td> ".$name."</td>
        
        <td> ".$identify."</td>
        
        <td> ".$email."</td>
        
        <td> ".$password."</td
        <td> ".$usertype."</td
        <td>
  <button class = 'btn btn-primary'><a href='signuppage.php?updateid=".$id."' class ='text-light'>update</a></button>
  
  <button class = 'btn btn-danger'><a href='deleteusers.php?deleteid='".$id."' class = 'text-light'>delete</a></button>
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
