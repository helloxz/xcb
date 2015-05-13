<?php
	//载入smarty配置文件
	include_once(dirname(dirname(__FILE__)).'/config/smarty.config.php');
	//载入数据库类
	include_once(dirname(dirname(__FILE__)).'/config/db.class.php');

	$con = $db->connect();					//连接数据库
	$sql = "SELECT * FROM `userinfo`";		//SQL查询语句
	$query = $db->query($sql,$con);
	$rows = $db->rows($query);

	$list[] = array();
	
	
	while ($result = $db->fetch_assoc($query)) {
		$list[] = $result;
	}
	//print_r($list);
	

	$smarty->assign('list',$list);
	$smarty->display("./admin/list.html");
?>