<html>
  <head>
  <link rel="stylesheet" type="text/css" href="./style.css" />
<?php
//這是後端網頁，跟google連線及判斷
$secret_key = 'Secret key貼這邊';
$g_recaptcha_response=$_POST['g-recaptcha-response'];
$remoteip=$_SERVER['REMOTE_ADDR'];
$url ="https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$g_recaptcha_response}&remoteip={$remoteip}";
$web=file_get_contents($url);
$res = json_decode($web);
if($res->success)
  header("Location: https://www.google.com.tw/");//驗證成功網頁跳轉至google首頁
else
    echo "fail";//驗證失敗網頁提示fail，或者用下方的語句導回驗證頁面(index.php)
    //echo "驗證失敗請返回重新驗證！<br/>";
    //echo "<a href='./index.php' class=css_btn_class>返回</a><br/>"; 
?>
</html>
  </head>
