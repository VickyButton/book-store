<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey("sk_live_***");

require_once('vendor/shippo/shippo-php/lib/Shippo.php');
Shippo::setApiKey("shippo_live_***");

$client = TaxJar\Client::withApiKey("**");

// $token = $_SESSION['token'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$street_address = $_SESSION['street_address'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$zip_code = $_SESSION['zip_code'];
$copies = $_SESSION['copies'];
$email = $_SESSION['email'];

// $order = unserialize($_SESSION['order']);
// $product = unserialize($_SESSION['product']);

$full_name = $first_name . ' ' . $last_name;
$address = $street_address . ' ' . $city . ', ' . $state . ' ' . $zip_code . ' US';

// $order = \Stripe\Order::retrieve($order->id);
// $order->pay(['source' => $token]);

// $emailto = $email . ",***@***.***";
// $toname = $full_name;
// $emailfrom = "***@***.***";
// $fromname = "***.***";
// $subject = "Order Confirmation";
// $messagebody = $full_name . ", thanks for your purchase! Here are your order details:" . "\r\nOrder ID: " . /* $order->id */ . "\r\nProduct: " . /* $product->name */ . "\r\nCopies: " . $copies . "\r\nAddress: " . $address;
// $headers =
// 	'Return-Path: ' . $emailfrom . "\r\n" .
// 	'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
// 	'X-Priority: 3' . "\r\n" .
// 	'X-Mailer: PHP ' . phpversion() .  "\r\n" .
// 	'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
// 	'MIME-Version: 1.0' . "\r\n" .
// 	'Content-Transfer-Encoding: 8bit' . "\r\n" .
// 	'Content-Type: text/plain; charset=UTF-8' . "\r\n";
// $params = '-f ' . $emailfrom;
// mail($emailto, $subject, $messagebody, $headers, $params);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instead Of... | Success!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <div class="flex wrapper" id="main-wrapper">
    <?php include('nav.php') ?>
    <section class="flex wrapper" id="success">
        <span>Order submitted! Check your email for more information.</span>
    </section>
    <section class="flex wrapper">
        <?php include('book.php') ?>
    </section>
  </div>
</body>
</html>