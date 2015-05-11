<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-11 18:24:22
         compiled from "D:\wwwroot\xcb\templates\home\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:28063554f62013eb5a3-46163698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f563407a99462002560e3dd83804c87eb509f8ca' => 
    array (
      0 => 'D:\\wwwroot\\xcb\\templates\\home\\reg.html',
      1 => 1431339859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28063554f62013eb5a3-46163698',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554f62014397a1_12653164',
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
        <!--    顶部    -->
        <?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="reg-form">
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-lg-10 col-md-offset-1">
                        <div class="col-lg-12">
                            <form method="post" name="reg-form" action="" id="reg-form">
                                <table id="reg-table" >
                                    <tr>
                                    <td width="10%;">姓名：</td>
                                    <td width="60%;">
                                        <input type="text" name="name" />
                                    </td>
                                    </tr>
                                    <tr id="class">
                                        <td>班级：</td>
                                        <td>
                                            <input name="thirteen" type="radio" value="" />13级
                                            <input name="fourteen" type="radio" value="" />14级 
                                            <input type="text" name="class" placeholder="网络1班" style="width:94px;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>联系电话：</td>
                                        <td>
                                            <input name="tel" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E-mail：</td>
                                        <td>
                                            <input name="email" type="email" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>QQ号：</td>
                                        <td>
                                            <input name="qq" type="text" value="" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>其它说明</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td  colspan="2">
                                            <textarea   valign="top" name = "other" placeholder = "团队比赛可填写此项，比如：
                                            团队名称：梦想飞扬
                                            团队成员：
                                            张三、李四、王五">
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            验证码：<input type="text" name="" style="width:80px;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button>提交</button>
                                        </td>
                                        <td><button>清空</button></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            &COPY;2015 Powered by 计科系宣传部 沪ICP备11037377号-5<br />
            Google地图 | 百度地图 | 本站使用恒创主机， 图片托管于七牛云
        </div>
    </body>
</html>
<?php }} ?>
