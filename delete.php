<?php
session_start();
include 'config.php';
if(!($_SESSION['user_type'] == 'admin')){
    header("location:viewCars.php");
  }
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE from cars where id =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "deleted successfully";
        header('location:viewCars.php');
    } else {
        die(mysqli_error($con)); 

    }

}

?>