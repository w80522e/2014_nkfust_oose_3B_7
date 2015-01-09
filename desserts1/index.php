<?php session_start(); ?>
<?php include("connect.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AnMei點心坊</title>
<style type="text/css">
body {
	background-image: url(img/b.jpg);
}
.a {
	font-size: 12px;
	color: #333;
}
#login {
  	position:absolute;
  	right:30px;
} 
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<form id="login" method='post'>
<font color="#003366">帳號：</font><input name="username" type="text" />
<font color="#003366">密碼：</font><input name="password" type="password" />
<input name="login1" type="submit" value="登入"/>
<input name="submit" type="hidden" value="submit"/>
</form>
<table width="25%" border="0" align="center">
  <tr>
    <td><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="800" height="500">
          <param name="movie" value="test.swf" />
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
          <!-- 此 param 標籤會提示使用 Flash Player 6.0 r65 和更新版本的使用者下載最新版本的 Flash Player。如果您不想讓使用者看到這項提示，請將其刪除。 -->
          <param name="expressinstall" value="Scripts/expressInstall.swf" />
          <!-- 下一個物件標籤僅供非 IE 瀏覽器使用。因此，請使用 IECC 將其自 IE 隱藏。 -->
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="test.swf" width="800" height="500">
            <!--<![endif]-->
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="6.0.65.0" />
            <param name="expressinstall" value="Scripts/expressInstall.swf" />
            <!-- 瀏覽器會為使用 Flash Player 6.0 和更早版本的使用者顯示下列替代內容。 -->
            <div>
              <h4>這個頁面上的內容需要較新版本的 Adobe Flash Player。</h4>
              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash Player" width="112" height="33" /></a></p>
            </div>
            <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
    </p></td>
  </tr>
</table>
<table width="25%" border="0" align="right">
  <tr>
    <td valign="middle"><a href="index1.html" class="a">SKIP</a></td>
  </tr>
</table>
<p>
  <script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
  
  <!--字跟游標_開始-->
  <style>
<!--
.spanstyle{position:absolute;visibility:visible;top:-50px;font-size:10pt;
font-weight:bold;color:#734d2b}
-->
</style> 
  <script language="JavaScript">
<!--
var x,y 
<!--在此修改字距，數值越大就越遠-->
var step=15
var flag=0 
<!--在此修改出現的文字-->
var message="歡 迎 光 臨 AnMei點心坊  ~" 
message=message.split("") 
var xpos=new Array() 
for (i=0;i<=message.length;i++) { 
xpos[i]=-50 
} 
var ypos=new Array() 
for (i=0;i<=message.length;i++) { 
ypos[i]=-50 
} 
function handlerMM(e){ 
x = (document.layers) ? e.pageX : document.body.scrollLeft+event.clientX 
y = (document.layers) ? e.pageY : document.body.scrollTop+event.clientY 
flag=1 
} 
function makesnake() { 
if (flag==1 && document.all) { 
for (i=message.length; i>=1; i--) { 
xpos[i]=xpos[i-1]+step 
ypos[i]=ypos[i-1] 
} 
xpos[0]=x+step 
ypos[0]=y 
for (i=0; i<message.length; i++) { 
var thisspan = eval("span"+(i)+".style") 
thisspan.posLeft=xpos[i] 
thisspan.posTop=ypos[i] 
} 
} 
else if (flag==1 && document.layers) { 
for (i=message.length; i>=1; i--) { 
xpos[i]=xpos[i-1]+step 
ypos[i]=ypos[i-1] 
} 
xpos[0]=x+step 
ypos[0]=y 

for (i=0; i<message.length; i++) { 
var thisspan = eval("document.span"+i) 
thisspan.left=xpos[i] 
thisspan.top=ypos[i] 
} 
} 
var timer=setTimeout("makesnake()",30) 
}
-->
</script>
  <body onLoad="makesnake()">
</p>

<!--字跟游標_結束-->
<script language="JavaScript"> 
<!-- 
for (i=0;i<=message.length;i++) { 
document.write("<span id='span"+i+"' class='spanstyle'>") 
document.write(message[i]) 
document.write("</span>") 
} 
if (document.layers){ 
document.captureEvents(Event.MOUSEMOVE); 
} 
document.onmousemove = handlerMM; 
--> 
</script>
</body>
</html>
<?php
	if($_POST['submit']=="submit")
	{
		if($member=mysql_fetch_array(mysql_query("select * from member where username like '".$_POST['username']."' and password like '".$_POST['password']."'")))
		{
			$_SESSION['username']=$member['username'];
			$_SESSION['password']=$member['password'];
			$_SESSION['name1']=$member['name'];
			$_SESSION['phone']=$member['phone'];
			$_SESSION['mail']=$member['mail'];
			echo "<script>location.href='index1';</script>";
		}
		else
		{
			echo "<script>alert('帳號或密碼錯誤'); </script>";
			echo "<script>location.href='index';</script>";
		}
	}
?>