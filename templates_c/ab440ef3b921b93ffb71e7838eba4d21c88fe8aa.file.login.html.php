<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-10 10:23:42
         compiled from "D:\wwwroot\xsb\templates\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3239954fe693f4d4843-26755110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab440ef3b921b93ffb71e7838eba4d21c88fe8aa' => 
    array (
      0 => 'D:\\wwwroot\\xsb\\templates\\admin\\login.html',
      1 => 1425978664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3239954fe693f4d4843-26755110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fe693f4f3c57_48866079',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fe693f4f3c57_48866079')) {function content_54fe693f4f3c57_48866079($_smarty_tpl) {?><html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录(Login)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="../public/css/assets/css/reset.css">
        <link rel="stylesheet" href="../public/css/assets/css/supersized.css">
        <link rel="stylesheet" href="../public/css/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="assets/js/html5.js"><?php echo '</script'; ?>
>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录(Login)</h1>
            <form method="post" name = "myform">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！">
				<div style = "width:70px;height:20px;float:left;margin-top:36px;margin-left:8px;"><img src = "../admin/code_char.php" alt = '看不清？' name = "yzm" onClick="this.src=this.src+'?'+Math.random()" /></div>
                <input type="submit" class="submit_button" name = "sub" value = "登 录" id = "button">
                <div class="error"><span>+</span></div>
            </form>
        </div>
		
        <!-- Javascript -->
        <?php echo '<script'; ?>
 src="../public/css/assets/js/jquery-1.8.2.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../public/css/assets/js/supersized.3.2.7.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../public/css/assets/js/supersized-init.js?te" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="../public/css/assets/js/scripts.js" ><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $("#button").click(function(){
                    var name = myform.username.value;
                    var password = myform.password.value;
                    var yzm = myform.Captcha.value;
                    $.post('./Checklogin.php',{username:name,password:password,yzm:yzm},function(data,status){
                        alert('data:' + data + status);
                    });
                });
            });
        <?php echo '</script'; ?>
>
        
    </body>
</html>

<?php }} ?>
