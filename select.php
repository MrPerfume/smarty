<?php
include 'libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";


$man = array(
	5 => '周恩来',
	6 => '梅兰芳',
	7 => '张学良',
	8 => '汪精卫'
);
$smarty->assign('man',$man);
$smarty->display('select.tpl');