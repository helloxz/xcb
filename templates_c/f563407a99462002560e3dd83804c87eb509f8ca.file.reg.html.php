<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 17:56:17
         compiled from "D:\wwwroot\xcb\templates\home\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:28063554f62013eb5a3-46163698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f563407a99462002560e3dd83804c87eb509f8ca' => 
    array (
      0 => 'D:\\wwwroot\\xcb\\templates\\home\\reg.html',
      1 => 1431359508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28063554f62013eb5a3-46163698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554f62014397a1_12653164',
  'variables' => 
  array (
    'ip' => 0,
    'get_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f62014397a1_12653164')) {function content_554f62014397a1_12653164($_smarty_tpl) {?><!DOCTYPE html>
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
                        <div class="col-lg-12">
                            <form method="post" name="reg-form"  id="reg-form">
                                <table id="reg-table" >
                                    <tr>
                                    <td width="10%;">姓名：</td>
                                    <td width="60%;">
                                        <input type="text" name="name" placeholder = "张三" id="name" />
                                    </td>
                                    </tr>
                                    <tr id="class">
                                        <td>班级：</td>
                                        <td>
                                            <input name="grade" type="radio" value="13级" id="grade" />13级
                                            <input name="grade" type="radio" value="14级" checked="checked" id="grade" />14级 
                                            <input type="text" name="cla" id="cla" placeholder="网络1班" style="width:94px;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>联系电话：</td>
                                        <td>
                                            <input name="tel" type="text" value="" id="tel" placeholder="13800000000" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E-mail：</td>
                                        <td>
                                            <input name="email" type="email" id="email" value="" placeholder="service@xiaoz.me" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>QQ号：</td>
                                        <td>
                                            <input name="qq" type="text" id="qq" value="" placeholder="337003006" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>其它说明</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2">
                                            <textarea name = "other" id="other" >
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            验证码：<input type="text" name="verification" style="width:80px;" id="verification" />
                                            <img src="./config/code_char.php" title="点击刷新" align="absbottom" onclick="this.src='./config/code_char.php?'+Math.random();" width="100" height="30" />
                                            <a href="javascript:;" onclick="this.src='./config/code_char.php?'+Math.random();" title="点击更换验证码">看不清？</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" id="submit" name="sublime" class="btn" onclick="send_form();">提交</button>
                                        </td>
                                        <td><button id="reset" name="reset" class="btn">清空</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--隐藏信息-->
        <div style="display:none;">
        	<div id="ip"><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</div>
        	<div id="get_info"><?php echo $_smarty_tpl->tpl_vars['get_info']->value;?>
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
