<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Branch Employee Profile</title>
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/employee/profile.css">
  <link rel="stylesheet" href="<?=ROOT ?>/assets/css/sidepanel.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <?php include 'sidepanel.php' ?>

<div class="main">
  <div class="profile-card">
    <div class="image">
      <img src="https://shotkit.com/wp-content/uploads/2021/06/cool-profile-pic-matheus-ferrero.jpeg" alt="" class="profile-pic">
    </div>
    <div class="data">
      <h2>User ID</h2>
      <span>User Name</span>
    </div>
  
  </div>


    <div class="goals">Goals >>></div>
    <div class="tasks">Tasks to be completed within this month</div>

    <div class="logout_btn"></div>
    <div class="logout">Log Out</div>
    
  </div>

  <script src="<?=ROOT?>/assets/js/sidepanel.js"></script>

</body>
</html>

