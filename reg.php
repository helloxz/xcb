<?php
    include_once './config/smarty.config.php';      //载入smarty配置文件
    include_once './config/get_info.php';			//获取操作系统及浏览器
    $ip = $_SERVER["REMOTE_ADDR"];					//获取访客IP
    $get_info = get_os().' - '.get_broswer();			//获取操作系统及浏览器

    

    $smarty->assign('ip',$ip);
    $smarty->assign('get_info',$get_info);
    $smarty->display('./home/reg.html');
