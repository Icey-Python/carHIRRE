<?php
session_start();
include "config.php";
if(!($_SESSION['user_type'] == 'admin')){
    // user can view only a single report of the current purchase
    $car_id = $_GET['ref_id'];
    $sql = "SELECT * FROM cars WHERE id='$car_id'";
    $result = mysqli_query($con, $sql);
    if($result){
    while($row =mysqli_fetch_array($result)){
        $id = $row['id'];
        $image =$row['carImage'];
        $name = $row['carName'];
    }
    $sql_insert= "INSERT INTO `report`(`transaction_id`, `status`, `name`, `car name`, `car price`) VALUES ('".$_SESSION['checkout_id']."','".$_SESSION['status']."','".$_SESSION['name']."','$name','".$_SESSION['total_cost']."')";
    $result = mysqli_query($con, $sql_insert);
}
  }else{
    //admin can view all
  }
?>
<!DOCTYPE Html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="jquery-3.6.3.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>-->
</head>
    <body>
        <div id="content">
        <div class="container w-50 bg-light">
        <div class="d-flex flex-column justify-content-center align-items-center" id="order-heading">
        <div class="text-uppercase pt-5">
        <p>Order detail - REGGIE MOTORS</p>
        </div>
        <div class="h4" id="date"></div>
        <div class="pt-1">
        <p><b class="text-dark"><?php echo "Order #".$_SESSION['checkout_id']." is currently";?> processing</b></p>
        </div>
        </div>
        <div class="wrapper bg-white">
        <div class="table-responsive">
        <table class="table table-borderless rounded">
            <thead>
                <tr class="text-uppercase text-muted">
                    <th scope="col">product</th>
                    <th scope="col" class="text-right">total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $name;?></th>
                    <td class="text-right"><b><?php echo $_SESSION['total_cost'];?></b></td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="pt-2 border-bottom mb-3"></div>
        <div class="d-flex justify-content-start align-items-center pl-3">
        <div class="text-muted px-3">Payment Method</div>
        <div class="ml-auto">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/M-PESA_LOGO-01.svg/2560px-M-PESA_LOGO-01.svg.png" alt=""
                width="50" height="50">
            <label></label>
        </div>
        </div>
        
        </div>
        <div class="d-flex justify-content-start align-items-center pb-4 pl-3 border-bottom">
        
        <div class="ml-auto price px-3">
            <?php echo $_SESSION['total_cost']?>
        </div>
        </div>
        <div class="d-flex justify-content-start align-items-center pl-3 py-3 mb-4 border-bottom">
        <div class="text-muted px-3">
            Today's Total
        </div>
        <div class="ml-auto h5">
        <?php echo $_SESSION['total_cost']?>
        </div>
        </div>
        <div class="bg-light px-2 rounded text-dark font-weight-bold">
        <div class="pl-3 font-weight-bold h4">Terms and conditions</div>
        <div class="d-sm-flex justify-content-between rounded my-3 subscriptions">
        When renting a car, drivers must be 21 years of age or older, possess a valid driver’s license, and present a major credit card. Additional drivers must meet the same requirements. Renters must return the car on the date and time specified in the rental agreement, obey all local laws and regulations, and not use the car for illegal activities. Financial responsibility for any damage to the car is the responsibility of the renter, and they must pay all taxes, fees, surcharges, and any additional services requested. The car must be returned with the same level of fuel as when it was picked up
        </div>
        </div>
        </div>
        </div>
        </div>
        <script>
        let currentDate = new Date().toJSON().slice(0, 10);
        let dateElem = document.querySelector('#date')
        dateElem.innerText = currentDate;
        <form action="" method="post">
<input type="submit" name="download" value="Download PDF" />
</form>
 
        </script>
 <form action="download.php" method="post">
<input type="submit" name="download" value="Download PDF"  />
</form>
 
</div>
    </div>
    </body>

</html>