<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$password = $_POST['password'];

$sql="select * from users where name='$name'";
$results= mysqli_query($con, $sql);
$row= mysqli_fetch_array($results);
  
if($num >0){
  if(password_verify($password,PASSWORD_DEFAULT));
}
$_SESSION['user_type'] = $row['user_type'];

if($row["usertype"]!=" "){
  if($row["usertype"]=="user"){
    $_SESSION['name'] = $name;
    header('location: landingpage.php');
  }
  elseif($row["usertype"]=="admin"){
    $_SESSION['name'] = $name;
    header('location: viewUsers.php');
  }else{
    header('location: signuppage.php');
  }
}
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car rental management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="login.css">
</head>
  <body>
   
    <h1 class="car1" class="text-white">CAR RENTAL MANAGEMENT SYSTEM</h1>
<div class="form1">

   <form method="POST" action="#">
    <h2 style= "text-align: center" class="text-white"> login here </h2>

   <div class="form-group">
    <label for="Name" class="text-white">Username:</label>
    <input type="text" class="form-control" id="name1" placeholder="Please enter your name" name="name" autocomplete="off">
  </div>
  
  <div class="form-group">
  <label for="Name" class="text-white">Password:</label>
  <input type="password" class="form-control" id="name1" placeholder="Please enter your Password" name="password" autocomplete="off">
</div>

<div style="padding-left: 20%; padding-right:20%; padding-top:10px;">
  

  <input type = "submit" name="submit" value = " login " class="text-center form-control text-bg-primary"/><br />
  </div>
<div>
    <p>
       or <br>
       <a href="signuppage.php">Create account</a>
    </p>
</div>

  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>