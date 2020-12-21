<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instead Of... | Purchase</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="flex wrapper" id="main-wrapper">
        <?php include('nav.php') ?>
        <section class="flex wrapper">
            <?php include('book.php') ?>
        </section>
        <section class="flex wrapper">
            <form class="flex" id="payment-form" method="post" action="checkout.php">
                <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name" required>
                <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name" required>
                <input type="number" name="copies" class="form-control mb-3 StripeElement StripeElement--empty" min="1" max="20" placeholder="Number of Copies" required>
                <input type="text" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
                <input type="text" name="street_address" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Street Address" required>
                <input type="text" name="city" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="City" required>
                <select name="state" class="form-control mb-3 StripeElement StripeElement--empty" required>
                    <option value="" class="def_opt" disabled selected hidden>State</option>
                    <option value="AL" class="def_opt" onclick="check_opt()">Alabama</option>
                    <option value="AK" class="def_opt" onclick="check_opt()">Alaska</option>
                    <option value="AZ" class="def_opt" onclick="check_opt()">Arizona</option>
                    <option value="AR" class="def_opt" onclick="check_opt()">Arkansas</option>
                    <option value="CA" class="def_opt" onclick="check_opt()">California</option>
                    <option value="CO" class="def_opt" onclick="check_opt()">Colorado</option>
                    <option value="CT" class="def_opt" onclick="check_opt()">Connecticut</option>
                    <option value="DE" class="def_opt" onclick="check_opt()">Delaware</option>
                    <option value="DC" class="def_opt" onclick="check_opt()">District Of Columbia</option>
                    <option value="FL" class="def_opt" onclick="check_opt()">Florida</option>
                    <option value="GA" class="def_opt" onclick="check_opt()">Georgia</option>
                    <option value="HI" class="def_opt" onclick="check_opt()">Hawaii</option>
                    <option value="ID" class="def_opt" onclick="check_opt()">Idaho</option>
                    <option value="IL" class="def_opt" onclick="check_opt()">Illinois</option>
                    <option value="IN" class="def_opt" onclick="check_opt()">Indiana</option>
                    <option value="IA" class="def_opt" onclick="check_opt()">Iowa</option>
                    <option value="KS" class="def_opt" onclick="check_opt()">Kansas</option>
                    <option value="KY" class="def_opt" onclick="check_opt()">Kentucky</option>
                    <option value="LA" class="def_opt" onclick="check_opt()">Louisiana</option>
                    <option value="ME" class="def_opt" onclick="check_opt()">Maine</option>
                    <option value="MD" class="def_opt" onclick="check_opt()">Maryland</option>
                    <option value="MA" class="def_opt" onclick="check_opt()">Massachusetts</option>
                    <option value="MI" class="def_opt" onclick="check_opt()">Michigan</option>
                    <option value="MN" class="def_opt" onclick="check_opt()">Minnesota</option>
                    <option value="MS" class="def_opt" onclick="check_opt()">Mississippi</option>
                    <option value="MO" class="def_opt" onclick="check_opt()">Missouri</option>
                    <option value="MT" class="def_opt" onclick="check_opt()">Montana</option>
                    <option value="NE" class="def_opt" onclick="check_opt()">Nebraska</option>
                    <option value="NV" class="def_opt" onclick="check_opt()">Nevada</option>
                    <option value="NH" class="def_opt" onclick="check_opt()">New Hampshire</option>
                    <option value="NJ" class="def_opt" onclick="check_opt()">New Jersey</option>
                    <option value="NM" class="def_opt" onclick="check_opt()">New Mexico</option>
                    <option value="NY" class="def_opt" onclick="check_opt()">New York</option>
                    <option value="NC" class="def_opt" onclick="check_opt()">North Carolina</option>
                    <option value="ND" class="def_opt" onclick="check_opt()">North Dakota</option>
                    <option value="OH" class="def_opt" onclick="check_opt()">Ohio</option>
                    <option value="OK" class="def_opt" onclick="check_opt()">Oklahoma</option>
                    <option value="OR" class="def_opt" onclick="check_opt()">Oregon</option>
                    <option value="PA" class="def_opt" onclick="check_opt()">Pennsylvania</option>
                    <option value="RI" class="def_opt" onclick="check_opt()">Rhode Island</option>
                    <option value="SC" class="def_opt" onclick="check_opt()">South Carolina</option>
                    <option value="SD" class="def_opt" onclick="check_opt()">South Dakota</option>
                    <option value="TN" class="def_opt" onclick="check_opt()">Tennessee</option>
                    <option value="TX" class="def_opt" onclick="check_opt()">Texas</option>
                    <option value="UT" class="def_opt" onclick="check_opt()">Utah</option>
                    <option value="VT" class="def_opt" onclick="check_opt()">Vermont</option>
                    <option value="VA" class="def_opt" onclick="check_opt()">Virginia</option>
                    <option value="WA" class="def_opt" onclick="check_opt()">Washington</option>
                    <option value="WV" class="def_opt" onclick="check_opt()">West Virginia</option>
                    <option value="WI" class="def_opt" onclick="check_opt()">Wisconsin</option>
                    <option value="WY" class="def_opt" onclick="check_opt()">Wyoming</option>
                </select>
                <input type="text" name="zip_code" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Zip Code" required>
                <div id="card-element" class="form-control">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>

                <button>Checkout</button>
            </form>
        </section>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/payment.js"></script>
</body>
</html>