<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-10 15:45:53
         compiled from "D:\wwwroot\xcb\templates\home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2820254ff011b77ef79-68586244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e9296fed1fcaf5c0672e476281b95e3b2e0f83' => 
    array (
      0 => 'D:\\wwwroot\\xcb\\templates\\home\\index.html',
      1 => 1431265549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2820254ff011b77ef79-68586244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ff011b7fbf91_62612562',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff011b7fbf91_62612562')) {function content_54ff011b7fbf91_62612562($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>计科系宣传部</title>
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

        <!--    中间部分    -->
        <div class="container" id="con">
            <div class="row">
                <div class="col-md-offset-1 col-lg-10 text-center">
                    <div class="col-lg-4">
                        <center><img src="./public/img/1.jpg" class="img-circle img-responsive" /></center>
                        <h3>部门简介</h3>
                    </div>
                    <div class="col-lg-4">
                        <center><img src="./public/img/2.jpg" class="img-circle img-responsive" /></center>
                        <h3>关于我们</h3>
                    </div>
                    <div class="col-lg-4">
                        <center><img src="./public/img/3.jpg" class="img-circle img-responsive" /></center>
                        <h3>部门趣事</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="news">
            <div class="row">
                <div class="col-md-offset-1 col-lg-10" style = "border: 1px solid #ddd;">
                    <div class="col-lg-5">
                        <ul class="nav nav-tabs nav-tabs-s nav-s" role="tablist" style="margin-top:10px;" id="tabs">
                            <li class="active">
                                <a data-toggle="tab" role="tab" href="#news" id="NewsCenter" onfocus="this.blur();">新闻中心</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" role="tab" href="#quick" id="Quick" onfocus="this.blur();">快捷访问</a>
                            </li>
                        </ul>
                        <div id="hot">
                            <ul>
                            <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                            </ul>
                        </div>
                        <div id="quick">
                            <ul>
                            <li>
                                <a href="http://www.sczyxy.cn/index.asp" target="_blank">川职院官网</a>
                            </li>
                             <li>
                                <a href="http://125.67.64.236:6611/web/web/web/a_index.asp">教务在线</a>
                            </li>
                             <li>
                                <a href="http://125.67.64.226:9009/Default.aspx?ReturnUrl=%2f">计算机科学系</a>
                            </li>
                             <li>
                                <a href="http://tieba.baidu.com/f?kw=%CB%C4%B4%A8%D6%B0%D2%B5%BC%BC%CA%F5%D1%A7%D4%BA&fr=ala0">川职院贴吧</a>
                            </li>
                             <li>
                                <a href="http://www.czyon.com/">川职院在线网</a>
                            </li>
                             <li>
                                <a href="#">小z博客</a>
                            </li>
                             <li>
                                <a href="#">这是热点新闻一</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 text-center" >
                        <h4>计科系全体教师</h4><br />
                        <img src="./public/img/jikexi.jpg" width="520" />
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
