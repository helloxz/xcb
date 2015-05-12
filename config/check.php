<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
	session_start();
	include_once 'db.class.php';					//载入数据库类
	$code = $_SESSION["helloweba_char"];
	$verification = $_GET['verification'];					//获取验证码
	$verification = strtolower($verification);
	$email = $_GET['email'];								//获取邮箱

	$con = $db->connect();					//连接数据库
	//查询Email
	$sql = "SELECT * FROM `userinfo` WHERE `email` = '$email'";

	//判断验证码
	if ($_GET['f'] == 'ver') {
		if ($code != $verification) {
			//验证码错误返回0
			echo '0';
		}
		if ($code == $verification) {
			//验证码正确返回1
			echo '1';
		}
	}

	//判断Email
	if($_GET['f'] == 'email') {
		//执行SQL语句
		$query = $db->query($sql,$con);
		//返回影响行数
		$num = $db->rows($query);
		if($num >=1) {
			//已经报名返回3
			echo '3';
		}
		else{
			//可以报名返回4
			echo '4';
		}
	}

	//判断电话号码
?>