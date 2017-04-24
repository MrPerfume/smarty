<?php /* Smarty version Smarty-3.1.16, created on 2017-04-24 12:19:23
         compiled from "templates\hold.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3153258fded4b0f4611-87750340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af67bc383802fb5179a8ac1e486e8119a25c04ef' => 
    array (
      0 => 'templates\\hold.tpl',
      1 => 1444185531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3153258fded4b0f4611-87750340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58fded4b5939b8_29636436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fded4b5939b8_29636436')) {function content_58fded4b5939b8_29636436($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>保留变量</h2>
	<p><?php echo $_SERVER['SERVER_NAME'];?>
</p>
	<p><?php echo time();?>
</p>
	<p><?php echo 'Smarty-3.1.16';?>
</p>
	
	
	<p><?php echo @constant('ROOT');?>
</p>
</body>
</html><?php }} ?>
