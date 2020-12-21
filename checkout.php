<?php
session_start();

// Replace placeholder keys with valid keys.

// require_once('vendor/autoload.php');
// \Stripe\Stripe::setApiKey("***");

// require_once('vendor/shippo/shippo-php/lib/Shippo.php');
// Shippo::setApiKey("***");

// $client = TaxJar\Client::withApiKey("***");

// $product = \Stripe\Product::retrieve("prod_***");
// $sku = \Stripe\SKU::retrieve("sku_***");

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$street_address = $POST['street_address'];
$city = $POST['city'];
$state = $POST['state'];
$zip_code = $POST['zip_code'];
$copies = $POST['copies'];
$token = $POST['stripeToken'];

$full_name = $first_name . ' ' . $last_name;
$address = $street_address . ' ' . $city . ', ' . $state . ' ' . $zip_code . ' US';

// $order = \Stripe\Order::create([
//   "items" => [
//     [
//       "type" => "sku",
//       "parent" => $sku,
//       "quantity" => $copies
//     ]
//   ],
//   "currency" => "usd",
//   "shipping" => [
//     "name" => $full_name,
//     "address" => [
//       "line1" => $street_address,
//       "city" => $city,
//       "state" => $state,
//       "country" => "US",
//       "postal_code" => $zip_code
//     ]
//   ],
//   "email" => $email
// ]);


// $order_id = $order->id;
// $shipping_id = $order->shipping_methods[(sizeof($order->shipping_methods) - 1)]->id;

// $order = \Stripe\Order::retrieve($order_id);
// $order->selected_shipping_method = $shipping_id;
// $order->save();

// $_SESSION['order'] = serialize($order);
// $_SESSION['product'] = serialize($product);

// $_SESSION['token'] =  $POST['stripeToken'];
$_SESSION['email'] = $email;
$_SESSION['first_name'] =  $first_name;
$_SESSION['last_name'] =  $last_name;
$_SESSION['street_address'] =  $street_address;
$_SESSION['city'] =  $city;
$_SESSION['state'] =  $state;
$_SESSION['zip_code'] =  $zip_code;
$_SESSION['copies'] = $copies;

// $shipping_cost = ($order->shipping_methods[(sizeof($order->shipping_methods) - 1)]->amount)/100;
// $shipping_tax = ($order->items[3]->amount)/100;
// $tax_cost = ($order->items[1]->amount)/100;
// $prod_price = (($sku->price)/100);
// $init_price = ($order->items[0]->amount)/100;
// $grand_total = ($order->amount)/100;
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instead Of... | Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="flex wrapper" id="main-wrapper">
        <?php include('nav.php') ?>
        <section class="flex wrapper" id="checkout">
            <h2>Checkout</h2>
            <span>Product: <?//php echo $product->name?></span>
            <span>Copies: <?//php echo $copies?></span>
            <span>Address: <?//php echo $address?></span>
            <br/>
            <span>Subtotal: $<?//php echo $init_price?></span>
            <span>Shipping: $<?//php echo $shipping_cost?></span>
            <span>Shipping Tax: $<?//php echo $shipping_tax?></span>
            <span>Sales Tax: $<?//php echo $tax_cost?></span>
            <br/>
            <span>Grand total: $<?//php echo $grand_total?></span>
            <form id="button_form" action="success.php">
                <button class="StripeElement" id="submit_order">Submit Order</button>
            </form>
        </section>
    </div>
</body>
</html>