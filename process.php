<?php
	$id=$_GET['id'];
	$owner=$_GET['owner'];
	$lender=$_GET['lender'];
	$bookname=$_GET['bookname'];
	echo $id." ".$owner." ".$lender." ".$bookname;
	if($owner===$lender){
		$info="您不能借自己的书";
		header("Location:wrong.php?info=$info");
	}
	$conn=mysqli_connect('localhost','root','','library');    //连接数据库
	
	$str="select count from user where username=$lender";
	mysqli_query($conn, "set names gbk");
	//mysqli_query($conn, $sql);
	$rs=mysqli_query($conn, $str);
	$row=mysqli_fetch_array($rs);
	if($row['count']<5){
		$in="您的积分不够借书";
		header("Location:wrong.php?info=$in");
	}
	mysqli_free_result($rs);
	$sql1="update book set mark=1 where id=$id";
	$sql2="update user set count=count+20 where username=$owner";
	$sql3="update user set count=count-5 where username=$lender";	
	$sql4="insert into record(id,bookname,username,mark) values('$id','$bookname','$owner',1)";
	$sql5="insert into record(id,bookname,username,mark) values('$id','$bookname','$lender',0)";

	mysqli_query($conn, $sql1);
	mysqli_query($conn, $sql2);
	mysqli_query($conn, $sql3);
	//echo $sql4."  ";
	mysqli_query($conn, $sql4);
	mysqli_query($conn, $sql5);
	header("Location:wrong.php?info=借书成功");