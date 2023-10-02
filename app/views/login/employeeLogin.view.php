<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Finagle Lanka(PVT) Ltd</title>
	<link rel="stylesheet" href="<?=ROOT?>/assets/css/login/employeeLogin.css">
	<!---we had linked our css file----->
</head>

<body>
	<section>
		<form method="POST">
			<h1>Login</h1>
			<div class="inputbox">
				<ion-icon name="mail-outline"></ion-icon>
				<input name="username" required>
				<label for="">User Name </label>
			</div>
			<div class="inputbox">
				<ion-icon name="lock-closed-outline"></ion-icon>
				<input name="password" required>
				<label for="">Password</label>
			</div>
			<div class="forget">
				<label for=""><input type="checkbox">Remember Me</label>
				<a href="#">Forget Password</a>
			</div>
			<button>Log in</button>
			<!-- <div class="register">
				<p>Don't have a account <a href="#">Register</a></p>
			</div>-->
		</form>
	</section>

</body>

</html>