<?php
if($_GET['info']==='�˳��ɹ�'){
	setcookie('username','',time()-10);
}
echo $_GET['info'].'<a href="index.php" style="text-align:center ; text-decoration:none ; color:#0099FF">������ҳ</a>	';