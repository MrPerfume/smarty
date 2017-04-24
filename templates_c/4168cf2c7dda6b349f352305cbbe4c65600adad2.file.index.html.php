<?php /* Smarty version Smarty-3.1.16, created on 2017-04-18 11:24:42
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1491058f5f77aa07f03-90794876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4168cf2c7dda6b349f352305cbbe4c65600adad2' => 
    array (
      0 => 'templates\\index.html',
      1 => 1492514680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491058f5f77aa07f03-90794876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58f5f77aa2fd97_61008065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f5f77aa2fd97_61008065')) {function content_58f5f77aa2fd97_61008065($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<style>
		
			h1{color:tomato; font-size:40px;}
			p{color: #00f;}
		
	</style>
</head>
<body>
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
	<p><<?php ?>?php echo $title;?<?php ?>></p>
	
</body>
</html>
<?php }} ?>
