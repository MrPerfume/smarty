<?php /* Smarty version Smarty-3.1.16, created on 2017-04-24 12:26:03
         compiled from "templates\if.tpl" */ ?>
<?php /*%%SmartyHeaderCode:357958fdeedb4e3179-08368521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d537cb9adbcf8b54aabe64ec4ea635b6e461f1f' => 
    array (
      0 => 'templates\\if.tpl',
      1 => 1444188299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357958fdeedb4e3179-08368521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iq' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58fdeedb684d95_25982601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdeedb684d95_25982601')) {function content_58fdeedb684d95_25982601($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>if相关函数的使用</h2>
	<p>你的IQ是：<?php echo $_smarty_tpl->tpl_vars['iq']->value;?>
</p>
	<p>适合你的武功秘籍是：
		<?php if ($_smarty_tpl->tpl_vars['iq']->value>=130) {?> 
			乾坤大挪移
		<?php } elseif ($_smarty_tpl->tpl_vars['iq']->value<130&&$_smarty_tpl->tpl_vars['iq']->value>=110) {?>
			九阳神功
		<?php } elseif ($_smarty_tpl->tpl_vars['iq']->value<110&&$_smarty_tpl->tpl_vars['iq']->value>=90) {?>
			降龙十八掌
		<?php } elseif ($_smarty_tpl->tpl_vars['iq']->value<90&&$_smarty_tpl->tpl_vars['iq']->value>=70) {?>
			打狗棒法
		<?php } else { ?>
			葵花宝典
		<?php }?>
	</p>
</body>
</html><?php }} ?>
