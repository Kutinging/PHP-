<?php
//php version <7.0
header('Content-type: text/html; charset=utf-8');  
$userName=""; //資料庫帳號
$password="";  //資料庫密碼
$hostName=""; //資料庫主機(Server)名稱

//建立資料連結
if (!(@ $link=mysql_connect($hostName, $userName, $password)))
{
printf("<Br> 連結主機 %s 發生錯誤 <br>", $hostName);
exit();
}
else
{
printf("<Br> 連結主機 %s 成功 <br>", $hostName);
exit();
}
?>
