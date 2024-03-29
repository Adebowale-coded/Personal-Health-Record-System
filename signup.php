<?php
if (isset($_POST['register'])) {
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	require("dbconn.php");

	$result = mysqli_query($con, "INSERT INTO `users`(`fullname`, `email`, `password`) VALUES ('$name','$email','$password')");

	if($result) {
		?>
		<script>
			alert("Registration Successful");
			window.location.href = 'login.php'
		</script>
		<?php
	}else {
		?>
		<script>
			alert("An error occured");
		</script>
		<?php
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Register</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="fullname" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Your Email" required>
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>