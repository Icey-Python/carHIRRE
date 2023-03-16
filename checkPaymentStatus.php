<?php
session_start();
date_default_timezone_set('Africa/Nairobi');
$query_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
$BusinessShortCode = '174379';
$Timestamp = date('YmdHis');
$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
// ENCRIPT  DATA TO GET PASSWORD
$Password = base64_encode($BusinessShortCode . $passkey . $Timestamp);
//THIS IS THE UNIQUE ID THAT WAS GENERATED WHEN STK REQUEST INITIATED SUCCESSFULLY
$CheckoutRequestID = $_SESSION['checkout_id'];
$access_token = $_SESSION['tk'];
$queryheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $access_token];
# initiating the transaction
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $query_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $queryheader); //setting custom header
$curl_post_data = array(
  'BusinessShortCode' => $BusinessShortCode,
  'Password' => $Password,
  'Timestamp' => $Timestamp,
  'CheckoutRequestID' => $CheckoutRequestID
);
$data_string = json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
$curl_response = curl_exec($curl);
$data_to = json_decode($curl_response);
if (isset($data_to->ResultCode)) {
  $ResultCode = $data_to->ResultCode;
  if ($ResultCode == '1037') {
    $message = "Timeout in completing transaction";
  } elseif ($ResultCode == '1032') {
    $message = "Transaction  was cancelled by user";
  } elseif ($ResultCode == '1') {
    $message = "Insufficient balance for the transaction";
  } elseif ($ResultCode == '0') {
    $message = "The transaction was successfully";
  }
  $_SESSION['status'] = $message;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Check  for <?php echo $_SESSION['checkout_id'];?></title>
</head>
<body>
  <div class="jumbotron container">
    <h1 class="display-5"><?php echo $message?></h1>
    <p class="lead"><?php echo "This is the Payment status of ".$_SESSION['total_cost'] ." to rent the ". $_SESSION['car']." from REGGIE MOTORS";?></p>
    <hr class="my-4">
    <p><?php 
     echo "CHECKOUT ID: ".$CheckoutRequestID."<br>";
     echo $message;
    ?></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="./categories.php" role="button">Home</a>
      <a class="btn btn-primary btn-lg" href=<?php echo "./viewReports.php?ref_id=".$_SESSION['id'];?> role="button">Get Report</a>
    </p>
  </div>
</body>
</html>