<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-13 15:00:37
         compiled from "D:\wwwroot\xcb\templates\admin\list.html" */ ?>
<?php /*%%SmartyHeaderCode:120945552c480d26e70-30911473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979760d25eddcdcb038c7c700f99065ca0881cd8' => 
    array (
      0 => 'D:\\wwwroot\\xcb\\templates\\admin\\list.html',
      1 => 1431500436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120945552c480d26e70-30911473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5552c480d2acf1_38342151',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5552c480d2acf1_38342151')) {function content_5552c480d2acf1_38342151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wwwroot\\xcb\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title>报名列表</title>
	<meta name="generator" content="EverEdit" />
	<meta name="author" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
			font-family: '微软雅黑';
			font-size: 14px;
		}
		table{
			border: 1px solid #bbbbbb;
		}
		#list th{
			border: 1px solid #bbbbbb;
			background-color: #D9D9D9;
		}
		#list tr{
			line-height: 28px;
		}
		#list td{
			font-size: 13px;
			text-align: center;
		}
		#list{
			width: 900px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 40px;
		}
		
	</style>
</head>
<body>
	<table id="list" border="0" bordercolor = "#bbbbbb">
		<tr>
			<th width="60">姓名</th>
			<th width="100">班级</th>
			<th width="100">联系电话</th>
			<th width="160">E-mail</th>
			<th width="90">QQ号</th>
			<th width="100">报名时间</th>
			<th>团队信息</th>
		</tr>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['value'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['value']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['name'] = 'value';
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['value']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['value']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['value']['total']);
?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['grade'];
echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['cla'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['tel'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['qq'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['reg_time'],"%m-%d %H:%M");?>
</td>
				<td style="text-align: left;">
					<?php echo $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['value']['index']]['other'];?>

				</td>
			</tr>
		<?php endfor; endif; ?>
		<?php endfor; endif; ?> 
	</table>
</body>
</html>
<?php }} ?>
