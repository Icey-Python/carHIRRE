<?php
include'config.php';
    //include'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>car rental management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
  <link rel="stylesheet" href="dashboard.css">
  </head>
  <body>
    <header class="header">
        <a href="#">Admin dashboard</a>
<div class="logout">
<a href="logout.php" class="btn btn-primary">logout</a>
</div>
    </header>

 <aside style="height:100%;">
    <ul>
        <li>
            <a class= "active" href="viewUsers.php">manageUsers</a>
        </li>
        <li>
            <a href="addCar.php">addcar</a>
        </li>
        <li>
            <a href="viewCars.php">viewcars</a>
        </li>
        <li>
            <a href="bookings.php">viewbookings</a>
        </li>
       
        <img src="./assets/logo.png" class="mt-5" style="width:150px" alt="">
        <h5>REGGIE MOTORS</h5>
    </ul>
 </aside>


  </body>
</html>