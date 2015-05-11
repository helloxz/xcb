<?php
    $path = dirname(dirname(__FILE__));                 //获取根目录
    include_once $path.'/smarty/Smarty.class.php';      //引入配置文件
    $smarty = new Smarty;
    $smarty->caching = false;
    $smarty->template_dir = $path.'/templates';         //设置模板目录       
    $smarty->compile_dir = $path.'/templates_c';	//设置编译目录
    $smarty->cache_dir = $path.'/cache';                //设置缓存目录
    $smarty->left_delimiter = "{";
    $smarty->right_delimiter = "}";
?> 

