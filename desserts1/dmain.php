<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#Image30{
	border-style:none;
	border-width: 0px;
	}
#Image31{
	border-style:none;
	border-width: 0px;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>無標題文件</title>
<style type="text/css">
body {
	background-image: url(img/board.png);
	background-repeat: no-repeat;
}
#apDiv1 {
	position: absolute;
	width: 89px;
	height: 64px;
	z-index: 1;
	left: 366px;
	top: 80px;
}
#apDiv2 {
	position: absolute;
	width: 166px;
	height: 143px;
	z-index: 2;
	left: 531px;
	top: 264px;
}
</style>
</head>


<body>
<div id="apDiv1"><a href="add.php"><img src="img/add.png" width="88" height="63" id="Image30"/></a></div>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="device.php">
  <table width="82%" height="517" border="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="name"></label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>您的姓名:</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="text" name="name" id="name" value="<?php echo $_SESSION['name1'];?>"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>連絡電話:</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="phone"></label>
      <input type="text" name="phone" id="phone" value="<?php echo $_SESSION['phone'];?>"/>
      <div id="apDiv2"><a href="list.php"><img src="img/list.png" width="145" height="144" id="Image31"/></a></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>電子信箱:</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" value="<?php echo $_SESSION['mail'];?>"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>您的建議與留言:</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="134">&nbsp;</td>
      <td><label for="conet"></label>
      <textarea name="conet" id="conet" cols="50" rows="7"></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="送出" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
</body>
</html>
