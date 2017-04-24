<?php /* Smarty version Smarty-3.1.16, created on 2017-04-24 12:24:43
         compiled from "templates\config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254958fdee2a7fadb0-67783531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceea336d4583d138735e6f69e9a17c5c130b715a' => 
    array (
      0 => 'templates\\config.tpl',
      1 => 1493036679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254958fdee2a7fadb0-67783531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58fdee2acae184_32640145',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdee2acae184_32640145')) {function content_58fdee2acae184_32640145($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>配置变量</h2>
	<?php  $_config = new Smarty_Internal_Config('site.conf', $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars('newyear', 'local'); ?>

	<p><?php echo $_smarty_tpl->getConfigVariable('copyright');?>
</p>
	<p><?php echo $_smarty_tpl->getConfigVariable('police');?>
</p>

	<p><?php echo $_smarty_tpl->getConfigVariable('color');?>
</p>
</body>
</html>
<?php }} ?>
