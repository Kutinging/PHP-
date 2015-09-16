<?php
    $dbhost = '';//資料庫IP位置
    $dbuser = '';//資料庫使用者
    $dbpass = '';//使用者密碼
    $dbname = '';//資料庫名稱
    $conn = mysql_connect($dbhost, $dbuser, $dbpass) ;//連接資料庫
    mysql_query("SET NAMES 'utf8'");//設定語系
    mysql_select_db($dbname);
    $sql = "select * from (表名稱)";//查詢整個表單
    $result = mysql_query($sql) ;
    while($row = mysql_fetch_array($result)){//印出資料
        echo $row['欄位名稱1']."<br/>";
		echo $row['欄位名稱2']."<br/>";
    }
mysql_close();
?>