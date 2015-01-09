<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>點心列表</title>
<style type="text/css">
body {
	background-image: url(img/board.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
}
#Image6{
	border-style:none;
	border-width: 0px;
	}
</style>
</head>

<?php
include('connect.php');
?>

<body>
<table width="200" border="0" align="left">
  <tr>
        <td width="165"><a href="dmain.php"><img src="img/back.png" id="Image6" width="114" height="79" /></a></td>
        <td width="10">&nbsp;</td>
        <td width="11">&nbsp;</td>
      </tr>
    </table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <div align="center">
 
    <p><br>
    <td><p>點心名稱：
     <select name="searchsweetname">
     <option value="all">全部</option>
     <?php
			$searchname = mysql_query("SELECT `sweetname`FROM sweetlist");
			while ($check2 = mysql_fetch_array($searchname)){
				echo "<option  value=".$check2[sweetname].">".$check2[sweetname]."</option>";
			}
				
		?>
        
 <?php

$result=mysql_query("SELECT `name`,`sweetname`, `material,`make `From `sweetlist` WHERE `sweetname`='".$_POST[searchsweetname]."' 
");

$searchsweetname=$_POST['searchsweetname'];

if($_POST['searchsweetname']==all){
	
$result=mysql_query("SELECT `sweetlist`.`name`, `sweetlist`.`sweetname`, `sweetlist`.`material`, `sweetlist`.`make`
FROM `sweetlist` 
");

	}
else{
$result=mysql_query("SELECT `sweetlist`.`name`, `sweetlist`.`sweetname`, `sweetlist`.`material`, `sweetlist`.`make`
FROM `sweetlist` WHERE `sweetlist`.`sweetname`='".$_POST[searchsweetname]."' 
");
}
?>
   </select>
    <input  type="submit"  name="btnsubmit"  value="送出" />
      </p>
        <p>
          <input  type="hidden"  name="action"  value="insert" />
 </p>
   <p>點心做法 </p></td>
     <table width="542" height="53" border="1">
      <tr>
        <td width="117"><div align="center">提供者名稱</div></td>
        <td width="107"><div align="center">點心名稱</div></td>
        <td width="46"><div align="center">材料</div></td>
        <td width="77"><div align="center">做法</div></td>
      </tr>


  <?PHP
while($SQL=mysql_fetch_array ($result)){
	echo "<tr>";
	echo "<td>".$SQL['name']."</td>"."<td>".$SQL['sweetname']."</td>	"."<td>".$SQL['material']."</td>"."<td>".$SQL['make']."</td>";
	echo "</tr>";
}
?>
     

    </table>
  </div>
</form>
</body>
</html>