<?php
session_start();
$ch = curl_init('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
curl_setopt($ch, CURLOPT_HTTPHEADER,['Authorization: Basic ' . base64_encode('PpcSSpnUP2sKOO6DzkahRI7aZ4EnYFFG:iMkyzWjMZ6MyvUtK')
   ]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = json_decode(curl_exec($ch));
curl_close($ch);
$token = $response->access_token;
$_SESSION['tk'] = $token;

date_default_timezone_set('Africa/Nairobi');
$processrequestUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
$callbackurl = 'https://internationalnewsnow.000webhostapp.com/php/callback.php';
$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";


$BusinessShortCode = '174379';
$Timestamp = date('YmdHis');

// ENCRIPT  DATA TO GET PASSWORD
$Password = base64_encode($BusinessShortCode . $passkey . $Timestamp);
$phone = '254703396015';//change this to your phone number
$money = $_SESSION['total_cost'];
$PartyA = $phone;
$PartyB = '254703396015';//change this to your phone number 254703396015
$AccountReference = 'REGGIE MOTORS';
$TransactionDesc = 'Rent car from REGGIE MOTORS';
$Amount = $money;
$stkpushheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $token];

//INITIATE CURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $processrequestUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, $stkpushheader); //setting custom header
$curl_post_data = array(
  //Fill in the request parameters with valid values
  'BusinessShortCode' => $BusinessShortCode,
  'Password' => $Password,
  'Timestamp' => $Timestamp,
  'TransactionType' => 'CustomerPayBillOnline',
  'Amount' => $Amount,
  'PartyA' => $PartyA,
  'PartyB' => $BusinessShortCode,
  'PhoneNumber' => $PartyA,
  'CallBackURL' => $callbackurl,
  'AccountReference' => $AccountReference,
  'TransactionDesc' => $TransactionDesc
);

$data_string = json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
$curl_response = curl_exec($curl);
//ECHO  RESPONSE
$data = json_decode($curl_response);
$CheckoutRequestID = $data->CheckoutRequestID;
$ResponseCode = $data->ResponseCode;
$customer_message = $data->CustomerMessage;
$_SESSION['checkout_id'] = $CheckoutRequestID;
date_default_timezone_set('Africa/Nairobi');
$query_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
$BusinessShortCode = '174379';
$Timestamp = date('YmdHis');
$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
// ENCRIPT  DATA TO GET PASSWORD
$Password = base64_encode($BusinessShortCode . $passkey . $Timestamp);
//THIS IS THE UNIQUE ID THAT WAS GENERATED WHEN STK REQUEST INITIATED SUCCESSFULLY

$access_token = $token;
$queryheader = ['Content-Type:application/json', 'Authorization:Bearer ' . $access_token];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Payment for <?php echo $_SESSION['name'];?></title>
</head>
<body>
  <div class="jumbotron container">
    <h1 class="display-5">Payment to REGGIE MOTORS</h1>
    <p class="lead"><?php echo "Confirm Payment of ".$money." to rent the ". $_SESSION['car']." from REGGIE MOTORS";?></p>
    <hr class="my-4">
    <p><?php 
     echo "CHECKOUT ID: ".$CheckoutRequestID."<br>";
     echo $customer_message;
    ?></p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="./checkPaymentStatus.php" role="button">Check Transction Status</a>
    </p>
  </div>
</body>
</html>