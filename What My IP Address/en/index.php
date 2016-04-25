<!DOCTYPE HTML>
<?php
header("Content-Type:text/html; charset=utf-8");
if (!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}else{
    $ip = $_SERVER["REMOTE_ADDR"];
}
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
  $country = $query['country'];
  $city = $query['city'];
  $isp = $query['isp'];
  $timezone = $query['timezone'];
} else {
  echo 'Unable to get location';
}
?>
<html>
	<head>
		<meta property="og:image" content="http://i.imgur.com/INwgcug.png"/>
		<title>My IP is <?php echo $ip;?>|myip.kttsite.com</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="../images/ico.ico"/>  
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">My IP</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="http://myip.kttsite.com/">我的IP</a></li>
								<li><a target="_blank" href="http://osu.kttsite.com/" >OSU!譜面鏡像下載</a></li>
								<li><a target="_blank" href="http://ttvpn.kttsite.com/" >TTVPN 日本VPN服務</a></li>
								<li><a target="_blank" href="http://google.kttsite.com/" >Google 内嵌連結轉換器</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-globe"></span></div>My IP is :
							<h2><?php echo $ip;?></h2><br/>
							<p>Country：<?php echo $country;?></p>
							<p>City：<?php echo $city;?></p>
							<p>ISP：<?php echo $isp;?></p>
							<p>Timezone：<?php echo $timezone ;?></p>
							<p>User Agent：<?php echo $_SERVER['HTTP_USER_AGENT'] ;?></p>
							
							<ul class="contact">
								<li class="fa-twitter"><a href="https://twitter.com/kuting304">twitter.com</a></li>
								<li class="fa-facebook"><a href="https://www.facebook.com/yykkold55tw">facebook.com</a></li>
							</ul>
						</div>

					</section>

				
				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>