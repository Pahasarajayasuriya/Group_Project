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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <div class="pro_container">
        <h1 class="pro_font">
            Your Account
        </h1>
        <div class="pro_card">
            <p class="pro_details"><strong>Username:</strong> pahasara01</p>
            <p class="pro_details"><strong>Name:</strong> Pahasara</p>
            <p class="pro_details"><strong>E-mail:</strong> pahasara@mail.com</p>
            <p class="pro_details"><strong>Phone No:</strong> 0772815328</p>
             <br>
            <form action="edit_profile.php">
                <button type="submit" class="pro_btn">Edit Your Profile</button>
            </form>
        </div>
    </div>
</body>

</html>
