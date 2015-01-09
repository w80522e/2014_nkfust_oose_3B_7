<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP 程式</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
echo "感謝您的建議與留言，我們會盡快回復您或改善";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$conet = $_POST['conet'];

//開啓檔案
if(!$fp = fopen("device.txt","a"))
{
	echo "檔案無法開啓";
	exit;
}

//寫入檔案

$record = "$name,$phone,$email,$conet\r\n";
fputs($fp,$record);
fclose($fp);

?>
</body>
</html>