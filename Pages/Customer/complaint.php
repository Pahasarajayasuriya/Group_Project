<?php
$role = "User";
require_once '../../Components/NavBar/header.php';
require_once '../../Components/NavBar/NavBar.php';
require_once '../../Components/NavBar/footer.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Complains</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="home-section">
        <div class="pro_container">
            <h1 class="pro_font">
                Complaints
            </h1>
            <div class="pro_card">
                <form action="complaint.php" method="POST">
                    <div class="pro_form-group">
                        <label class="pro_name" for="pro_username">Enter Your Name</label>
                        <input class="pro_input" type="text" id="pro_name" name="pro_name">
                    </div>
                    <div class="pro_form-group">
                        <label class="pro_name" for="pro_name">Enter Your Phone Number</label>
                        <input class="pro_input" type="text" id="pro_phoneno" name="pro_phoneno">
                    </div>
                    <div class="pro_form-group">
                        <label class="pro_name" for="pro_email">Enter Your E-mail</label>
                        <input class="pro_input" type="email" id="pro_comemail" name="pro_comemail">
                    </div>
                    <div class="pro_form-group">
                        <label class="pro_name" for="pro_phone">Enter Your Complain</label>
                        <input class="pro_input" type="text" id="pro_complaint" name="pro_complaint">
                    </div>
                    <div class="pro_button">
                        <p>&emsp;</p>
                        <form action="complaint.php">
                            <button type="submit" class="pro_btn">Sumbit</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>