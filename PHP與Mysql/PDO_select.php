<?php
header('Content-type: text/html; charset=utf-8');  
$userName=""; //資料庫帳號
$password="";  //資料庫密碼
$hostName=""; //資料庫主機(Server)名稱
$database="";//資料庫名稱
$sql = "mysql";//資料庫類型
$conn = "$sql:host=$hostName;dbname=$database";
//建立資料連結
if (!(@ $link=new PDO($conn, $userName, $password)))
{
printf("<Br> 連結主機 %s 發生錯誤 <br>", $hostName);
exit();
}
else
{
$select = "select * from (table名稱)";
$connect = $link->query($select);
$row = $connect->fetch(PDO::FETCH_ASSOC);
echo $row['(資料欄位)'];

printf("<Br> 連結主機 %s 成功 <br>", $hostName);
exit();
}
?>
