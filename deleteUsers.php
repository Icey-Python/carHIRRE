<?php
session_start();
include 'config.php';
if(!($_SESSION['user_type'] == 'admin')){
    header("location:viewUsers.php");
  }
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE from users where id =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "deleted successfully";
        header('location:viewUsers.php');
    } else {
        die(mysqli_error($con)); 

    }

}

?>