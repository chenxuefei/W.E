<?php 
$conn=mysqli_connect('localhost','root','','library');    //�������ݿ�
$username;
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "
	SELECT *
    FROM user
    WHERE username='$username' and password='$password'
";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
	setcookie("username",$username,time()+1000);
	setcookie("password",$password,time()+1000);
	mysqli_close($conn);
	//$_SESSION['password']=$password;
	header("Location:index.php");
}else{
	$info='�û������������';
	header("Location:wrong.php?info=$info");
}

?>

        


