<?php
  include "config.php";
if(isset($_POST['submit'])){
 include "config.php";
  if(empty($_POST['name'])){
    die('name is required');
}
else {
    $name = trim(htmlspecialchars($_POST['name']));
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    die('valid email is reguired');
}else{
    $email= trim(htmlspecialchars($_POST['email']));
}
if(strlen($_POST['password'])<6){
    die('password should contain atleast 8 characters');
}
if(!preg_match('/[a-z]/i' , $_POST['password'])){
    die('the password should contain atleast one letter');
}


//$password_hash = password_hash($_POST['password'] ,PASSWORD_DEFAULT);
   $name= $_POST['name'];
   $identificationNo=$_POST['identificationNo'];
   // $licenceNo= $_POST['licenceNo'];
    $email= $_POST['email'];
    $password=  password_hash($_POST['password'],PASSWORD_DEFAULT);
  
    $sql ="INSERT INTO users (name, identificationNo, email, password)
    VALUES('$name', '$identificationNo','$email','$password')";
    $result = mysqli_query($con, $sql);
    if($result){
    header('location:login.php');
    }else{ 
       die(mysqli_error($con));
    }


  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
  <body>
    <div class="form1">
    <h2 style= "text-align: center" class="text-white"> Signup Here </h2>
   <div class="container my-15">
   <form action="signuppage.php" method="POST" >
   <div class="form-group">
    <label for="Name" class="text-white">UserName:</label>
    <input type="text" class="form-control" id="name1" placeholder="Please enter your name" name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="Name" class="text-white">Identification NO:</label>
    <input type="number" class="form-control" id="name1" placeholder="Please enter your identification number" name="identificationNo" autocomplete="off">
  </div>

 <!--<div class="form-group">
    <label for="Name" class="text-white">Licence NO:</label>
    <input type="number" class="form-control" id="name1" placeholder="Please enter your license number" name="LicenceNo" autocomplete="off">
  </div>-->
  

  <div class="form-group">
    <label for="email" class="text-white">Email:</label>
    <input type="email" class="form-control" id="Email1" name="email" autocomplete="off" placeholder="enter email">
    <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="Password" class="text-white">Password:</label>
    <input type="password" class="form-control" id="Password1" autocomplete="off" name="password" placeholder="enter your password">
  </div>
 
  <div style="padding-left: 45%;">
  <button type="submit" class="btn btn-primary"name= "submit">submit</button>
</div>
   </form>
   </div>
  </body>
</html>