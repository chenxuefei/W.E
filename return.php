<?php

$id=$_GET['id'];

 $conn=mysqli_connect('localhost','root','','library');
mysqli_query($conn, "set names gbk");
$sql1="delete from record where id=$id";
$sql2="update book set mark=0 where id=$id";
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
header("Location:wrong.php?info=还书成功"); 
