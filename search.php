<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ͼ���б�</title>
<link href="styles/mycss.css" rel="stylesheet" type="text/css">
</head>

<body style="padding:0 ; margin:0">
	<div style=" position:relative ; height:150px ; width:100% ;  ; background-color:#336699 ; margin:0px ; padding:0px">
		<img src="images/logo.jpg" style=" position:absolute ; right:150px">
		<img src="images/logo1.jpg" style="position:absolute ; left:50px ; height:150px" >
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
				<li><a href="me.html" target="_top">��ϵ�ͷ�</a></li>
		 	 </ul> 
	  </div>
	</div>
</div>
</div>
<?php 
	if(!isset($_COOKIE['username'])){
		header("Location:login.html");
	}
	
	if(isset($_POST['bookname'])){
		$bookname=$_POST['bookname'];
		//setcookie('bookname',$bookname,time()+1000);		
	}	
	if(isset($_GET['bookname'])){
		$bookname=$_GET['bookname'];
		//setcookie('bookname',$bookname,time()+1000);
	}
	$pageSize=5;//ÿҳ��ʾ5��
	if(isset($_GET['page'])){
		$page=intval($_GET['page']);
		//echo $page;
	}else{	
		$page=1;//��ǰҳ��
	}
	$offset=$pageSize*($page-1);
	$conn=mysqli_connect('localhost','root','','library');    //�������ݿ�
	$sql="select * from (SELECT id, bookname,author,owner FROM book WHERE bookname like '%".$bookname."%' and mark=0)as T limit $offset,$pageSize ";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_num_rows($result);
	echo $rows;
	if($rows===0){
		$info='�Բ���û�в�ѯ�����';
		//header("Location:wrong.php?info=$sql");
	}
	
	mysqli_free_result($result);
	mysqli_query($conn, "set names gbk");
	$rs=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($rs);
	if($row===0){
		$info='�Բ���û�в�ѯ�����';
		header("Location:wrong.php?info=$info");
	}
	$pages=intval($row/$pageSize);//ҳ������
	if($row%$pageSize!==0){
		$pages++;
	}
	?>
		<div style="position:absolut ; height:300px ; margin-left:23% ;  width:77% ;">
		<div style="position:relative ; height:200px ;margin:0px 0px 100px 0px; ">
		<table width="100%" style="position:relative  ; top:50px;">
����
  <tr>
����������<th style="width:20%;height:40px" bgcolor="#E0E0E0">���</th>
����������<th style="width:20%" bgcolor="#E0E0E0">����</th>
		<th  style="width:20%" bgcolor="#E0E0E0">����</th>
		<th  style="width:20%" bgcolor="#E0E0E0">������</th>
		<th  style="width:20%" bgcolor="#E0E0E0">����</th>
		<!--  ��ͷ-->
����</tr>
����<?php
while($myrow=mysqli_fetch_assoc($rs)){
			//$i++;
			?>
			 <tr>
����������<th style="width:20% ;height:30px" bgcolor="#E0E0E0"><?=$myrow['id']?></th>
����������<th style="width:20%" bgcolor="#E0E0E0"><?=$myrow['bookname']?></th>
		<th  style="width:20%" bgcolor="#E0E0E0"><?=$myrow['author']?></th>
		<th  style="width:20%" bgcolor="#E0E0E0"><?=$myrow['owner']?></th>
		<th  style="width:20%" bgcolor="#E0E0E0"><a href='process.php?id=<?=$myrow['id']?>&owner=<?=$myrow['owner']?>&lender=<?=$_COOKIE['username']?>&bookname=<?=$myrow['bookname']?>'>����</a></th>
����</tr>
			<?php
	}
?>
</table>
</div>
<div style="position:relative ; height:40px ;margin-bottom:0px; ">
<table width="100%" style="position:relative;">
<tr>
			<th style="width:20% ;height:30px" bgcolor="#fff"><a href="search.php?page=1&bookname="<?php echo $bookname ?>>��һҳ</a></th>
		<th  style="width:20%" bgcolor="#fff"><a href="<?php 		
		if($page===1){
			$newpage=1;
		}else{
			$newpage=$page-1;
		}
		echo 'search.php?page='.$newpage.'&bookname='.$bookname ?>">��һҳ</a></th>
		<th  style="width:20%" bgcolor="#fff">��<?=$page?>ҳ   ��<?=$pages?></>ҳ</th>
		<th  style="width:20%" bgcolor="#fff"><a href="<?php 		
		if($page===$pages){
			$newpage=$page;
		}else{
			$newpage=$page+1;
		}
		echo 'search.php?page='.$newpage.'&bookname='.$bookname ?>">��һҳ</a></th>
		<th  style="width:20%" bgcolor="#fff"><a href="<?php echo 'search.php?page='.$pages.'&bookname='.$bookname ?>">���ҳ</a></th>
		
����</tr>
</table>
</div>
</div>

</body>
</html>