<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkout.css">
    <title>Payment</title>

</head>

<body>

    <div class="check_container">

        <form action="">

            <div class="check_row">

                <div class="check_col">

                    <h3 class="check_title">Order Checkout</h3>

                    <div class="check_inputBox">
                        <span>full name :</span>
                        <input type="text" placeholder="Pahasara Jayasuriya">
                    </div>
                    <div class="check_inputBox">
                        <span>email :</span>
                        <input type="email" placeholder="example@example.com">
                    </div>
                    <div class="check_inputBox">
                        <span>Phone number :</span>
                        <input type="text" placeholder="111 2222222">
                    </div>
                    <div>
                        <span>Delivery or Pickup:</span>
                        <label>
                            <input type="radio" name="delivery-pickup" value="delivery"> Delivery
                        </label>
                        <label>
                            <input type="radio" name="delivery-pickup" value="pickup"> Pickup
                        </label>
                    </div>
                    <div class="check_inputBox">
                        <span>For Delivery orders :</span>
                        <button id="choose-address-button">Choose Address</button>
                    </div>

                    <div class="check_inputBox" id="branch-select">
                        <span>For Pickup Orders:</span>
                        <select>
                            <option value="branch1">Pelawatta</option>
                            <option value="branch2">Ja-Ela</option>
                            <option value="branch3">Nugegoda</option>
                            <option value="branch3">Jawatta</option>
                            <option value="branch3">Kollupitiya</option>
                            <option value="branch3">Dehiwala</option>
                            <option value="branch3">Borella</option>
                        </select>
                    </div>

                    <div class="check_flex">
                        <div class="inputBox">
                            <span>Date :</span>
                            <input type="date">
                        </div>
                        <div class="check_inputBox">
                            <span>Time :</span>
                            <input type="time">
                        </div>
                    </div>
                    <div>
                        <span>Send as a gift:</span>
                        <label>
                            <input type="radio" name="gift" value="yes"> Yes
                        </label>
                        <label>
                            <input type="radio" name="not gift" value="no"> No
                        </label>
                    </div>
                    <div class="check_inputBox">
                        <span>Note :</span>
                        <input type="text">
                    </div>

                </div>

                <div>
                    <span>Payment Method:</span>
                    <label>
                        <input type="radio" name="card" value="card"> Credit or Debit card
                    </label>
                    <label>
                        <input type="radio" name="cash" value="cash"> Cash payment
                    </label>
                </div>

                <div class="check_col">

                    <h3 class="check_title">payment</h3>

                    <div class="check_inputBox">
                        <span>cards accepted :</span>
                        <img src="../../img/card_img.png" alt="">
                    </div>
                    <div class="check_inputBox">
                        <span>name on card :</span>
                        <input type="text" placeholder="Mr. Pahasara Jayasuriya">
                    </div>
                    <div class="check_inputBox">
                        <span>credit card number :</span>
                        <input type="number" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="check_inputBox">
                        <span>exp month :</span>
                        <input type="text" placeholder="january">
                    </div>

                    <div class="check_flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" placeholder="2024">
                        </div>
                        <div class="check_inputBox">
                            <span>CVV :</span>
                            <input type="text" placeholder="123">
                        </div>
                    </div>

                </div>

            </div>
            <button class="check_submit-btn" id="p_checkout-button">Proceed to Checkout</button>

            <script>
                document.getElementById("p_checkout-button").addEventListener("click", function() {
                    event.preventDefault();
                    window.location.href = "progressbar.php";
                });
            </script>


        </form>
        <button class="check_back-btn" id="back-button">Back</button>

        <script>
            document.getElementById("back-button").addEventListener("click", function() {
                window.location.href = "product.php"
            });
        </script>
    </div>

</body>

</html>