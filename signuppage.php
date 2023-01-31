<!doctype html>
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
   <form >
   <div class="form-group">
    <label for="Name" class="text-white">UserName:</label>
    <input type="text" class="form-control" id="name1" placeholder="Please enter your name" name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="Name" class="text-white">Identification NO:</label>
    <input type="text" class="form-control" id="name1" placeholder="Please enter your identification number" name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="Name" class="text-white">Licence NO:</label>
    <input type="text" class="form-control" id="name1" placeholder="Please enter your license number" name="name" autocomplete="off">
  </div>
  

  <div class="form-group">
    <label for="email" class="text-white">Email:</label>
    <input type="email" class="form-control" id="Email1" name="email" autocomplete="off" placeholder="enter email">
    <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="Password" class="text-white">Password:</label>
    <input type="password" class="form-control" id="Password1" autocomplete="off" name="password">
  </div>

  <div style="padding-left: 45%;">
  <button type="submit" class="btn btn-primary"name= "submit" ><a href="landingpage.php" class="text-light">submit</a></button>
  </div>
   </form>
   </div>
  </body>
</html>