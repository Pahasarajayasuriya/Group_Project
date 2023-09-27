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
    <title>Edit Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="pro_container">
        <h1 class="pro_font">
            Edit Profile
        </h1>
        <div class="pro_card">
            <form action="view_profile.php" method="POST">
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_username">Username</label>
                    <input class="pro_input" type="text" id="pro_username" name="pro_username" value="pahasara01">
                </div>
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_name">Name</label>
                    <input class="pro_input" type="text" id="pro_name" name="pro_name" value="Pahasara">
                </div>
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_email">E-mail</label>
                    <input class="pro_input" type="email" id="pro_email" name="pro_email" value="pahasara@mail.com">
                </div>
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_phone">Phone No</label>
                    <input class="pro_input" type="text" id="pro_phone" name="pro_phone" value="0772815328">
                </div>
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_phone">Current Password</label>
                    <input class="pro_input" type="text" id="pro_phone" name="pro_current_password">
                </div>
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_phone">New Password</label>
                    <input class="pro_input" type="text" id="pro_phone" name="pro_new_password">
                </div>
                <div class="pro_form-group">
                    <label class="pro_name" for="pro_phone">Re-enter Password</label>
                    <input class="pro_input" type="text" id="pro_phone" name="pro_reenter_password">
                </div>
                <div class="pro_button">
                <p>&emsp;</p>
                <form action="view_profile.php">
                <button type="submit" class="pro_btn">Save changes</button>
                </form>
                <p>&emsp;</p>
                <form action="view_profile.php">
                <button type="submit" class="pro_btn">Cancel</button>
                </form>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
