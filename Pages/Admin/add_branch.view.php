<?php
$role = "Admin";
require_once 'header.php';
require_once 'NavBar.php';
require_once 'footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Branch Manager</title>
    <link rel="stylesheet" href="add_branch.css">
</head>
<body>
    <form class="form-container" action="#" method="post">
        <h1>Add a Branch</h1>
        <div class="form-row">
            <label for="field1">Branch name:</label>
            <input type="text" id="field1" name="field1" required>
        </div>

        <div class="form-row">
            <label for="field2">Email:</label>
            <input type="text" id="field2" name="field2" required>
        </div>

        <div class="form-row">
            <label for="field3">Contact NO:</label>
            <input type="text" id="field3" name="field3" required>
        </div>

        <div class="form-row">
            <label for="field4">Opening hours:</label>
            <input type="text" id="field4" name="field4" required>
        </div>

        <div class="form-row">
            <label for="field5">Closing hours:</label>
            <input type="text" id="field5" name="field5" required>
        </div>

        <div class="button-row">
            <button type="submit" class="submit-button">Add The Location</button></br>
            <button type="button" class="red-button left-button">Back</button>
            <button type="button" class="red-button right-button">Save</button>
        </div>
    </form>
</body>
</html>