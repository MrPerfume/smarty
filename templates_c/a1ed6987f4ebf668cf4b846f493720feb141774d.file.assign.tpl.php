<?php /* Smarty version Smarty-3.1.16, created on 2017-04-24 12:17:55
         compiled from "templates\assign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:892758fdecf39cd3a2-07747890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ed6987f4ebf668cf4b846f493720feb141774d' => 
    array (
      0 => 'templates\\assign.tpl',
      1 => 1444185050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892758fdecf39cd3a2-07747890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'score' => 0,
    'love' => 0,
    'user' => 0,
    'hero' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58fdecf3dbed42_81337415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdecf3dbed42_81337415')) {function content_58fdecf3dbed42_81337415($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>标量类型</h2>
	<p><?php echo $_smarty_tpl->tpl_vars['score']->value;?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['love']->value;?>
</p>

	<h2>索引数组</h2>
	<ul>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value[0];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value['1'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value[2];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['user']->value[3];?>
</li>
	</ul>

	<h2>关联数组</h2>
	<ul>
		<li><?php echo $_smarty_tpl->tpl_vars['hero']->value['id'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['hero']->value['name'];?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['hero']->value['nickname'];?>
</li>
	</ul>

</body>
</html><?php }} ?>
