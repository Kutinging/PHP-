<?php
	$info=$_POST["info"];
	$wg=$_POST["wg"];
	echo "<img src=\"https://chart.googleapis.com/chart?chs=".$wg."&cht=qr&chl=" . $info . "&choe=UTF-8\">";
?>
<html>
	<head>
		<title>Google Chart API����QRCode</title>
	</head>
	<body>
		<form method="post" action="">
		<!--��ƥi�����}�Φr��-->
			���X�n�s�񪺸�ơG<input type="text" name="info"><br/>
		<!--QRCode���j�p�A�i�ۦ�s�W-->
			�j�p�G
			<select type="text" name="wg">
				<option value="100x100">100x100</option>
				<option value="200x200">200x200</option>
				<option value="300x300">300x300</option>
			�@	<option value="400x400">400x400</option>
			</select>
			<input type="submit">
		</form>
	</body>
</html>