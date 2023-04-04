<?php 
session_start();
if(!isset($_SESSION["name"])){
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>car rental management system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <link rel="stylesheet" href="landingpage.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-primary">Regie motors</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ul1" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 pl-3">
        <li class="nav-item">
          <a class="nav-link active text-white" href="landingpage.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories.php">CATEGORIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT US</a>
        </li>
      </ul>
     <div class="logout" style="padding-right:10px; float: right;">
<a href="logout.php" class="btn btn-primary">logout</a>
        </div>
      </form>
      
    </div>
  </div>
</nav>

<h1 class="landing fs-1">WELCOME TO REGIE MOTORS</h1>
    <p class="text-center fs-4"> we offer quality services. Make a reservation with us.
      <br>
      Thank you.
    </p>
    <div class="elfsight-app-e71c0e19-63ff-48e8-9e01-c4a71f612439"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>