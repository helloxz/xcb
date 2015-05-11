<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-10 17:02:47
         compiled from "D:\wwwroot\xcb\templates\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3139354ff01c64c6c16-62956197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46aa76a436f9360584a4a6ba8b0c07fbaa4cc07a' => 
    array (
      0 => 'D:\\wwwroot\\xcb\\templates\\admin\\login.html',
      1 => 1426003362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3139354ff01c64c6c16-62956197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ff01c64f5a29_34760231',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff01c64f5a29_34760231')) {function content_54ff01c64f5a29_34760231($_smarty_tpl) {?><html>
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
        <style>
            #msg{
                position: fixed;
                width:20%;
                left:40%;
                top:30px;
                padding: 10px;
                margin-left: auto;
                margin-right: auto;
                margin-top:30px;
                color:red;
                border:1px solid #7b7b7b;
                border-radius: 5px;
                display: none;
            }
        </style>
    </head>
    
    <body>
        <div id = "msg">
            <span id = "tishi"></span>
        </div>
        <div class="page-container">
            <h1>登录(Login)</h1>
            <form method="post" name = "myform">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
                <input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！">
		<div style = "width:70px;height:20px;float:left;margin-top:36px;margin-left:8px;">
                    <img src = "../admin/code_char.php" alt = '看不清？' name = "yzm" onClick="this.src=this.src+'?'+Math.random()" />
                </div>
                <button type="submit" class="submit_button" id = "button">登 录</button>
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
            var status;
            $(document).ready(function(){
                $("#button").click(function(){
                    var username = myform.username.value;
                    var password = myform.password.value;
                    var yzm = myform.Captcha.value;
                    $.post('./Checklogin.php',{username:username,password:password,yzm:yzm},function(data){
                        status = data;
                        
                    });
                    
                    if(status == 0) {
                        $("#msg").show();
                        document.getElementById("tishi").innerHTML = "帐号或密码错误！";
                        setTimeout("test()",10);
                    }
                    return false;
                });
            });
            
            function test() {
                $(document).ready(function(){
                    $("#msg").fadeOut(3000);
                });
            }
        <?php echo '</script'; ?>
>
        
    </body>
</html>

<?php }} ?>
