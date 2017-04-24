<?php
include 'libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$smarty->assign('sn',array(1,2,3,4));
$smarty->assign('beauty',array('貂蝉','西施','杨贵妃','王昭君'));

$beauty = array(
	1 => '貂蝉',
	2 => '西施',
	3 => '杨贵妃',
	4 => '王昭君'
);
$smarty->assign('beauty1',$beauty);
$smarty->display('radio.tpl');