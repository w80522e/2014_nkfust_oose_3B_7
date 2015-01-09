<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>訪客提供甜點做法</title>
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


<?php
$name=$_POST['name'];
$sweetname=$_POST['sweetname'];
$material=$_POST['material'];
$make=$_POST['make'];


if($_POST['action']=="insert"){
if(($name=="" or $sweetname=="" or $material=="" or $make=="" ))
{
    echo"<script>
	alert('必填資料未輸入')
	</script>";
}
else{
$update1=mysql_query ("INSERT INTO  `sweet`.`sweetlist` (`name` ,`sweetname` ,`material` ,`make`)
VALUES ('".$_POST[name]."' ,  '".$_POST[sweetname]."',  '".$_POST[material]."',  '".$_POST[make]."');");

if(mysql_query($update1))
	{
	  echo "<script>
	  alert('成功')
	  </script>";
	}
}
}

?>

<body>
<table width="200" border="0" align="left">
  <tr>
        <td width="165"><a href="dmain.php"><img src="img/back.png" width="114" height="79" id="Image6" /></a></td>
        <td width="10">&nbsp;</td>
        <td width="11">&nbsp;</td>
  </tr>
</table>
<form method="post">
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <div align="center">
    <table width="480" border="0">
      <tr>
        <td width="183">訪客名稱： </td>
        <td width="287"><input  type="text"   name="name" maxlength="10" value="<?php echo $_SESSION['name1'];?>" required/></td>
      </tr>
      <tr>
        <td>點心名稱：</td>
        <td><input  type="text"   name="sweetname"   maxlength="10"  required/></td>
      </tr>
      <tr>
        <td>所需材料：</td>
        <td><input  type="text"   name="material"  required /></td>
      </tr>
      <tr>
        <td>做法：</td>
        <td> <textarea type="text" name="make" cols="45" rows="5" required /></textarea></td>
          
       
      </tr>
    </table>
  </div>
  <div align="center">
    <table width="479" border="0">
      <tr>
        <td width="184"><p>
          <input  type="submit"  name="btnsubmit"  value="送出" />
          </p>
          <p>
            <input  type="hidden"  name="action"  value="insert" />
        </p></td>
        
      </tr>
    </table>
  </div>
 
  <div align="center">
    </p>
  </div>
</form>


</body>
</html>