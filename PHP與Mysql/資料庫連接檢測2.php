<?php
//php need mysqli
header('Content-type: text/html; charset=utf-8');  
$userName=""; //資料庫帳號
$password="";  //資料庫密碼
$hostName=""; //資料庫主機(Server)名稱
$database="";
//建立資料連結
if (!(@ $link=mysqli_connect($hostName, $userName, $password)))
{
printf("<Br> 連結主機 %s 發生錯誤 <br>", $hostName);
exit();
}
else
{
mysqli_select_db($link,$database);
$select = "";//sql查詢語句
$result = mysqli_query($link,$select) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
$totalRows_select01 = mysqli_num_rows($result);
echo $row['name'];//name改為資料表欄位名稱
printf("<Br> 連結主機 %s 成功 <br>", $hostName);
exit();
}
?>
