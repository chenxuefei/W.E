<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><!-- InstanceBegin template="/Templates/mytp1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<!-- InstanceBeginEditable name="doctitle" -->
<title>������</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.STYLE2 {
	font-family: "΢���ź�";
	font-size: large;
}
-->
</style>
<style type="text/css">
<!--
.STYLE3 {font-family: "΢���ź�"; font-size: large; color: #000000; }
-->
</style>
<style type="text/css">
<!--
.STYLE5 {
	font-family: "΢���ź�";
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
<div style="position:absolute ; left:0 ; width:100% ; height:500px ;"><!-- �������ĸ���-->	
	<div style="position:absolute ; left:0 ; width:20%; height:500px ; border:#336699 solid ; border-top:hidden">
		<div id="menu" style="position:absolute ; width:200px ; height:300px ; left:13px ; top:100px">
		 	 <ul>
		  		<li><a href="Templates/index.html" target="_top"></a></li>
				<li><a href="index.php" target="_top">��վ��ҳ</a></li>
				<li><a href="add.php" target="_top">ע��ͼ��</a></li>
				<li><a href="search.html" target="_top">ͼ������</a></li>
				<li><a href="info.php" target="_top">�ҵ��˻�</a></li>
				<li><a href="books.html" target="_top">�����̳�</a></li>
				<li><a href="me.php" target="_top">��ϵ�ͷ�</a></li>
		 	 </ul> 
	  </div>
	</div>
	<div style="position:absolut ; height:100% ; margin-left:23% ;  width:77% ;">
			<!-- InstanceBeginEditable name="edit1" -->
			<div align="center">
			  <?php 
			  if(empty($_COOKIE['username'])==false){
			  	echo '<a href="" class="STYLE2" style="text-align:center ; text-decoration:none; color:#0099FF">'.'����'.$_COOKIE['username'].'</a>';
			  	$info="�˳��ɹ�";
			  	echo '<a href="wrong.php?info='.$info.'" class="STYLE2" style="text-align:center ; text-decoration:none ; color:#0099FF">�˳�</a>	';	   
			  }else{
			  	echo '<a href="login.html" class="STYLE2" style="text-align:center ; text-decoration:none; color:#0099FF">'.'��¼'.'</a> ';
			  
			  }
			  
			  
			  ?>
			  
			</div>
			<div  align="center" style="position:absolute; width:665px; height:176px; left: 380px; top: 68px;">
			  <div style="position:absolute; width:115px; height:137px; left: 15px; top: 23px; border:#9999CC solid">
			  	  <p class="STYLE5">����¶�</p>
					<p></p>
					<p class="STYLE3">�����˹</p>
				  	
			  </div>
				<div style="position:absolute; width:115px; height:137px;  left: 145px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">1984</p>
					<p></p>
					<p class="STYLE3">���ΰ�����</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 275px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">��Ĭ�Ĵ����</p>
					<p></p>
					<p class="STYLE3">��С��</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 405px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">����</p>
					<p></p>
					<p class="STYLE3">�໪</p>
				</div>
				<div style="position:absolute; width:115px; height:137px; left: 535px; top: 23px; border:#9999CC solid">
					 <p class="STYLE5">ƽ��������</p>
					<p></p>
					<p class="STYLE3">·ң</p>
				</div>
			</div>
			<div  align="center" style="position:absolute; width:665px; height:176px;  left: 380px; top: 285px;">
				<div style="position:absolute; width:115px; height:137px;  left: 15px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">�չ�����</p>
					<p></p>
					<p class="STYLE3">������</p>
				</div>
				<div style="position:absolute; width:115px; height:137px; left: 145px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">�ܻ�</p>
					<p></p>
					<p class="STYLE3">������</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 275px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">��˹�ֵ�����</p>
					<p></p>
					<p class="STYLE3">����</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 405px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">��¥��</p>
					<p></p>
					<p class="STYLE3">��ѩ��</p>
				</div>
				<div style="position:absolute; width:115px; height:137px;  left: 535px; top: 23px; border:#9999CC solid">
				 <p class="STYLE5">��ǻ</p>
					<p></p>
					<p class="STYLE3">��ƽ��</p>
				</div>
			</div>
			<!-- InstanceEndEditable -->
	</div>
</div>	<!--�������ĸ���-->
	<!--<div style="position:absolute ; left:0 ; top:503px ; height:300px ; width:100% ; background-color:#444444"><!--����������-->
	<!-- InstanceBeginEditable name="edit2" -->
	<!-- InstanceEndEditable -->
	<!--</div>-->
</div>
</body>
<!-- InstanceEnd --></html>
