<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
	session_start();
	include_once './config/smarty.config.php';      //载入smarty配置文件
	include_once './config/db.class.php';	//载入数据库类
	$email = $_POST['email'];						//获取用户邮箱
	
	$con = $db->connect();					//连接数据库
	
	

	if ($_POST['sub']) {
		$sql = "SELECT * FROM `userinfo` WHERE `email` = '$email'";
		$query = $db->query($sql,$con);
		$info = $db->fetch_assoc($query);
		print_r($email);
		print_r($info);
	}
	$smarty->display('./home/query.html');
?>