<?php
	$info=$_POST["info"];
	$wg=$_POST["wg"];
	echo "<img src=\"https://chart.googleapis.com/chart?chs=".$wg."&cht=qr&chl=" . $info . "&choe=UTF-8\">";
?>
<html>
	<head>
		<title>Google Chart API產生QRCode</title>
	</head>
	<body>
		<form method="post" action="">
		<!--資料可為網址或字串-->
			條碼要存放的資料：<input type="text" name="info"><br/>
		<!--QRCode的大小，可自行新增-->
			大小：
			<select type="text" name="wg">
				<option value="100x100">100x100</option>
				<option value="200x200">200x200</option>
				<option value="300x300">300x300</option>
			　	<option value="400x400">400x400</option>
			</select>
			<input type="submit">
		</form>
	</body>
</html>