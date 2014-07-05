<?php
if($_GET['info']==='退出成功'){
	setcookie('username','',time()-10);
}
echo $_GET['info'].'<a href="index.php" style="text-align:center ; text-decoration:none ; color:#0099FF">返回首页</a>	';