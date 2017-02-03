<?php 
$class = "";
$msg = "";
$username = "";
$password = "";
if (isset($_POST['user']) and isset($_POST['pass'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	if ($username == "ali" and $password == 123) {
		$msg = "شما وارد شدید";
		$class = "green";
		header("location: list_number.php");
	}else {
		$msg = "نام کاربری یا کلمه عبور اشتباه است";
		$class = "red";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="phone-icon.png">
</head>
<body>
	<div class="login">
		<div class="log-logo">
			<a href="login.php">
				<img src="phonebook.png">
			</a>
		</div>
		<div class="open">
			<form method="post" action="">
				<div>
					<input type="text" name="user" placeholder="نام کاربری" class="user">
				</div>
				<div>
					<input type="password" name="pass" placeholder="رمز عبور" class="pass">
				</div>	
				<div>
					<input type="submit" name="login" class="log center" value="ورود">
				</div>
			</form>
		</div>
		<div class="result <?php echo $class; ?>">
			<div><?php echo $msg; ?></div>
		</div>
	</div>
</body>
</html>	