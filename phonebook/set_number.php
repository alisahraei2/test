<?php 
// $msg = "";
// if (isset($_POST['f-name']) and isset($_POST['l-name']) and isset($_POST['s-number']) and isset($_POST['h-number']) and isset($_POST['email'])) {
// 	$f-name = $_POST['f-name'];
// 	$l-name = $_POST['l-name'];
// 	$s-number = $_POST['s-number'];
// 	$h-number = $_POST['h-number'];
// 	$email = $_POST['email'];
// 	if ($f-name == "" or $l-name == "" or $s-number == "" or $h-number == "" or $email == "") {
// 		$msg =  <script type="text/javascript">
// 					function myfunction() {
// 						alert("ثبت شماره با موفقیت انجام شد.")
// 					}
// 				</script>;
// 	}else{

// 	}
// }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>set_number</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="phone-icon.png">
</head>
<body>
	<div class="header">ثبت جدید</div>
	<div class="list-number center">
	<!-- 	<form method="post" action=""> -->
			<input type="text" name="f-name" placeholder="نام">
			<input type="text" name="l-name" placeholder="نام خانوادگی">
			<input type="text" name="s-number" placeholder="شماره ثابت">
			<input type="text" name="h-number" placeholder="شماره همراه">
			<input type="text" name="email" placeholder="رایانامه" class="m-weigh">
			<button onclick="myfunction()" class="log m-weigh set">افزودن...</button>
		<!-- </form> -->
		<script type="text/javascript">
			function myfunction() {
				alert("ثبت شماره با موفقیت انجام شد.")
			}
		</script>
	</div>
</body>
</html>