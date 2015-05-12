<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
	session_start();
	include_once './config/smarty.config.php';      //载入smarty配置文件
	include_once './config/db.class.php';	//载入数据库类
	$email = $_POST['email'];						//获取用户邮箱
	$email = htmlspecialchars($email);				//过滤email
	
	$con = $db->connect();					//连接数据库
	$sql_num = "SELECT * FROM `userinfo`";
	$q = $db->query($sql_num,$con);
	$num = $db->rows($q);
	$smarty->assign('num',$num);
	

	if ($_POST['sub']) {
		$sql = "SELECT * FROM `userinfo` WHERE `email` = '$email'";
		$query = $db->query($sql,$con);
		$info = $db->fetch_assoc($query);
		$rows = $db->rows($query);
		//$smarty->assign('rows',$rows);
		
		if ($rows == 1) {
			$smarty->assign('info',$info);
			$smarty->assign('rows','ok');
		}
		else if($rows != 1){
			$smarty->assign('info',$info);
			$smarty->assign('rows','no');
		}
		
		$smarty->assign('info',$info);
	}
	$smarty->display('./home/query.html');
?>