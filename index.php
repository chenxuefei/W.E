<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/mytp1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<!-- InstanceBeginEditable name="doctitle" -->
<title>读书网</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.STYLE2 {
	font-family: "微软雅黑";
	font-size: large;
}
-->
</style>
<style type="text/css">
<!--
.STYLE3 {font-family: "微软雅黑"; font-size: large; color: #000000; }
-->
</style>
<style type="text/css">
<!--
.STYLE5 {
	font-family: "微软雅黑";
	font-size: x-large;
	font-weight: bold;
	color: #009999;
}
-->
</style>
<!-- InstanceEndEditable -->
<link href="styles/mycss.css" rel="stylesheet" type="text/css">
</head>

<body style="padding:0 ; margin:0">
	<div style=" position:relative ; height:150px ; width:100% ;  ; background-color:#336699 ; margin:0px ; padding:0px">
		<img src="images/logo.jpg" style=" position:absolute ; right:150px">
		<img src="images/logo1.jpg" style="position:absolute ; left:50px ; height:150px">
	</div>
<div style="position:relative ; height:100%; width:100%">
<div style="position:absolute ; left:0 ; width:100% ; height:500px ;"><!-- 导航栏的父块-->	
	<div style="position:absolute ; left:0 ; width:20%; height:500px ; border:#336699 solid ; border-top:hidden">
		<div id="menu" style="position:absolute ; width:200px ; height:300px ; left:13px ; top:100px">
		 	 <ul>
		  		<li><a href="Templates/index.html" target="_top"></a></li>
				<li><a href="index.php" target="_top">网站首页</a></li>
				<li><a href="add.php" target="_top">注册图书</a></li>
				<li><a href="search.html" target="_top">图书搜索</a></li>
				<li><a href="info.php" target="_top">我的账户</a></li>
				<li><a href="books.html" target="_top">积分商城</a></li>
				<li><a href="me.php" target="_top">联系客服</a></li>
		 	 </ul> 
	  </div>
	</div>
	<div style="position:absolut ; height:100% ; margin-left:23% ;  width:77% ;">
			<!-- InstanceBeginEditable name="edit1" -->
			<div align="center">
			  <?php 
			  if(empty($_COOKIE['username'])==false){
			  	echo '<a href="" class="STYLE2" style="text-align:center ; text-decoration:none; color:#0099FF">'.'您好'.$_COOKIE['username'].'</a>';
			  	$info="退出成功";
			  	echo '<a href="wrong.php?info='.$info.'" class="STYLE2" style="text-align:center ; text-decoration:none ; color:#0099FF">退出</a>	';	   
			  }else{
			  	echo '<a href="login.html" class="STYLE2" style="text-align:center ; text-decoration:none; color:#0099FF">'.'登录'.'</a> ';
			  
			  }
			  
			  
			  ?>
			  
			</div>
			<div  align="center" style="position:absolute; width:665px; height:176px; left: 380px; top: 68px;">
			  <div style="position:absolute; width:115px; height:137px; left: 15px; top: 23px; border:#9999CC solid">
			  	  <p class="STYLE5">百年孤独</p>
					<p></p>
					<p class="STYLE3">马尔克斯</p>
				  	
			  </div>
				<div style="position:absolute; width:115px; height:137px;  left: 145px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">1984</p>
					<p></p>
					<p class="STYLE3">乔治奥威尔</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 275px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">沉默的大多数</p>
					<p></p>
					<p class="STYLE3">王小波</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 405px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">活着</p>
					<p></p>
					<p class="STYLE3">余华</p>
				</div>
				<div style="position:absolute; width:115px; height:137px; left: 535px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">平凡的世界</p>
					<p></p>
					<p class="STYLE3">路遥</p>
				</div>
			</div>
			<div  align="center" style="position:absolute; width:665px; height:176px;  left: 380px; top: 285px;">
				<div style="position:absolute; width:115px; height:137px;  left: 15px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">日光流年</p>
					<p></p>
					<p class="STYLE3">阎连科</p>
				</div>
				<div style="position:absolute; width:115px; height:137px; left: 145px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">受活</p>
					<p></p>
					<p class="STYLE3">阎连科</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 275px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">穆斯林的葬礼</p>
					<p></p>
					<p class="STYLE3">霍达</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 405px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">红楼梦</p>
					<p></p>
					<p class="STYLE3">曹雪芹</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 535px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">秦腔</p>
					<p></p>
					<p class="STYLE3">贾平凹</p>
				</div>
			</div>
			<!-- InstanceEndEditable -->
	</div>
</div>	<!--导航栏的父块-->
	<!--<div style="position:absolute ; left:0 ; top:503px ; height:300px ; width:100% ; background-color:#444444"><!--导航栏下面-->
	<!-- InstanceBeginEditable name="edit2" -->
	<!-- InstanceEndEditable -->
	<!--</div>-->
</div>
</body>
<!-- InstanceEnd --></html>
