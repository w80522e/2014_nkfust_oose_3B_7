<?php
$DB_ACCOUNT = "root";  	//資料庫帳戶
$DB_PASSWD	   = "abcd205205";  	//資料庫密碼
$DB_HOST	   = "localhost";  	//資料庫位置
$DB_SELECT	   = "sweet";  	//資料庫名稱

$LINK = mysql_connect($DB_HOST, $DB_ACCOUNT, $DB_PASSWD);
//$LINK = mysql_connect($DB_HOST, $DB_ACCOUNT);
If ($LINK){
	mysql_select_db($DB_SELECT, $LINK);
} else {
	echo "<h2>暫時停止服務</h2>";
	exit;
}

//將資料寫入資料庫時存成utf8格式
mysql_query("SET NAMES utf8"); 
mysql_query("SET CHARACTER_SET utf8");
?>