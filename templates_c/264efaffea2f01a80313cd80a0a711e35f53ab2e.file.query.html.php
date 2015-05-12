<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 18:00:11
         compiled from "D:\wwwroot\xcb\templates\home\query.html" */ ?>
<?php /*%%SmartyHeaderCode:63765551c885a3b7a7-94201364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264efaffea2f01a80313cd80a0a711e35f53ab2e' => 
    array (
      0 => 'D:\\wwwroot\\xcb\\templates\\home\\query.html',
      1 => 1431424796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63765551c885a3b7a7-94201364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5551c885ab4947_82741972',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5551c885ab4947_82741972')) {function content_5551c885ab4947_82741972($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>网页设计大赛在线报名 - 计科系宣传部</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="./public/css/style.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="./public/js/embed.js"><?php echo '</script'; ?>
>
    </head>
    <body>
    <div id="all">
        <!--    顶部    -->
        <?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="reg-form">
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-lg-10 col-md-offset-1">
                        <form method="post" name="query-form"  id="query-form" action="">
                                <table id="query-table" border="1" >
                                    <tr>
                                        <td><input type="text" id="email" name="email"  plcaeholder = "请输入您的邮箱进行查询！" /></td>
                                        <td>
                                            <button id="btn" class="btn" name="sub">查询</button>
                                        </td>
                                    </tr>
                                </table>
                        </form>
                        <table id="query-table" border="1" >
                            <tr>
                                <th>姓名</th>
                                <th>班级</th>
                                <th>E-mail</th>
                                <th>联系电话</th>
                                <th>报名状态</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
            &COPY;2015 Powered by 计科系宣传部 沪ICP备11037377号-5<br />
            Google地图 | 百度地图 | 本站使用恒创主机， 图片托管于七牛云
        </div>
    </div>
        <div id="loading">
        	<center><img src="./public/img/loading.gif" width="60" height="60" /></center>
        	<div id="msg" style="text-align:center;">正在处理...请稍后...</div>
        </div>
    </body>
</html>
<?php }} ?>
