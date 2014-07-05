<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE );
$conn=mysqli_connect('localhost','root','','library'); 
 //连接数据库

 if(isset($_COOKIE['username'])){
	$username=$_COOKIE['username'];
}else{
	header("Location:login.html");
} 
$sql="                               
		SELECT *
   		FROM record   where username=$username           
    "; 
mysqli_query($conn, "set names utf8");               									//!!!!-----!!!!!  user_id
$result = mysqli_query($conn,$sql);
$result1=mysqli_query($conn, "select count from user where username=$username");
$row1=mysqli_fetch_array($result1);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人信息</title>
<link href="styles/mycss.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.STYLE1 {
	font-family: "Segoe UI", "Segoe Script";
	font-size: large;
	color: #0066CC;
	font-weight: bold;
}
-->
</style>
</head>

<body style="padding:0 ; margin:0">
	<div style=" position:relative ; height:150px ; width:100% ;  ; background-color:#336699 ; margin:0px ; padding:0px">
		<img src="images/logo.jpg" style=" position:absolute ; right:150px">
		<img src="images/logo1.jpg" style="position:absolute ; left:50px ; height:150px" >
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
	 	<div style="position:absolute; height:288px; width:579px; background-color:; left: 330px; top: 101px;">
	 	  <div align="center" class="STYLE1">
	 	    <p>用户：<?php echo $_COOKIE['username']?> 积分：<?php echo $row1[count]?></p>
	 	    <table width="80%" border="1">
              <tr>
                <td width="35%"><div align="center">我借出的</div></td>
                <td width="35%"><div align="center">我借阅的</div></td>
                <td width="30%"><div align="center">操作</div></td>
              </tr>
              <?php
				   
                   while($row = mysqli_fetch_array($result)){
							if($row[mark]==1){
								echo              '<tr>
                							<td align="center">'.$row[bookname].'</td>
               								<td align="center"></td><td align="center"></td></tr>';
							}else{
								echo              '<tr>
                							<td align="center"></td>
               								<td align="center">'.$row[bookname].'</td>';
								?>
											<td align="center"><a href="return.php?id=<?=$row[id]?>">还书</a></td></tr>
																<?php 
							}
							}
  							
              ?>
            </table>
	 	    <p>&nbsp;</p>
	 	  </div>
	 	  <p>&nbsp;</p>
	 	</div>
	</div>
</div>
</div>

</body>
</html>