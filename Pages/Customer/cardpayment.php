<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Card Payments</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="pro_container">
        <h1 class="pro_font">
            Add your card details
        </h1>
        <div class="pro_card">
            <form action="cardpayment.php" method="POST">
                <div class="pro_form-group">
                    <input class="pro_input" type="text" id="pro_cardholdername" name="pro_cardholdername" placeholder="Cardholder name">
                </div>
                <div class="pro_form-group">
                    <input class="pro_input" type="text" id="pro_cardnumber" name="pro_cardnumber" placeholder="Card Number" maxlength="16">
                </div>
                <div class="pro_form-group">
                    <input class="pro_input" type="text" id="pro_expirydate" name="pro_expirydate" placeholder="Expiry Date" pattern="\d{2}/\d{2}" required>
                </div>
                <div class="pro_form-group">
                    <input class="pro_input" type="text" id="pro_cvv" name="pro_cvv" placeholder="CVV" maxlength="3">
                </div>
                <div class="pro_button">
                <p>&emsp;</p>
                <form action="cardpayment.php">
                <button type="submit" class="pro_btn">Pay</button>
                </form>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
