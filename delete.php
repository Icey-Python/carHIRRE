<?php
include 'config.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "delete from cars where id =$id";
    $result = mysqli_query($con, $sql);
    if($result){
        //echo "deleted successfully";
        header('location:viewCars.php');
    } else {
        die(mysqli_error($con)); 

    }

}

?>