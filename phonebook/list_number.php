<!DOCTYPE html>
<html>
<head>
	<title>list_number</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="phone-icon.png">		
</head>
<body>
	<div class="menu">
	<form method="post" action="">
		<a href="set_number.php">
			<img class="im-menu" src="add-icon.png">
		</a>
	</form>
	</div>
	<div class="header">لیست شماره ها</div>
	<div class="list-number right">
		<table>
			<tr>
				<th>نام</th>
				<th>نام خانوادگی</th>
				<th>شماره ثابت</th>
				<th>شماره همراه</th>
				<th>رایانامه</th>
				<th>تغییرات</th>
			</tr>
			<tr>
				<td>علی</td>
				<td>صحرایی</td>
				<td>08643241202</td>
				<td>09373104906</td>
				<td>ali.sahraei110@gmail.com</td>
				<td>
					<div class="center">
						<button id="edit" class="bo-list">ویرایش</button>
						<button id="delete" class="bo-list">حذف</button>
					</div>
				</td>
			</tr>
			<tr>
				<td>رضا</td>
				<td>محیطی</td>
				<td>02537222490</td>
				<td>09109610612</td>
				<td>rm.biqarar@gmail.com</td>
				<td>
					<div class="center">
						<button id="edit" class="bo-list">ویرایش</button>
						<button id="delete" class="bo-list">حذف</button>
					</div>
				</td>
			</tr>
			<tr>
				<td>حسین</td>
				<td>صحرایی</td>
				<td>08643241202</td>
				<td>09104832893</td>
				<td>hosein.sahraei@gmail.com</td>
				<td>
					<div class="center">
						<button id="edit" class="bo-list">ویرایش</button>
						<button id="delete" class="bo-list">حذف</button>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>