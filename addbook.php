<?php
$bookname=$_GET['bookname'];
$author=$_GET['author'];
if(!isset($_COOKIE['username'])){
	$info="����δ��¼";
	header("Location:wrong.php?info=$info");
}
$username=$_COOKIE['username'];
//echo $bookname." ".$author." ".$username;
$conn=mysqli_connect('localhost','root','','library');
mysqli_query($conn, "set names gbk");
$sql="insert into book(bookname,author,owner,mark) values('$bookname','$author','$username',0)";
mysqli_query($conn, $sql);
$info="����ͼ��ɹ�";
header("Location:wrong.php?info=$info");