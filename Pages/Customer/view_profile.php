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
            <p><strong>Username:</strong> pahasara01</p>
            <p><strong>Name:</strong> Pahasara</p>
            <p><strong>E-mail:</strong> pahasara@mail.com</p>
            <p><strong>Phone No:</strong> 0772815328</p>

            <form action="edit_profile.php">
                <button type="submit" class="pro_btn pro_btn-primary">Edit Profile</button>
            </form>
        </div>
    </div>
</body>

</html>
