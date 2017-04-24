<?php
include 'libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$smarty->assign('sn',array(5,6,7,8));
$smarty->assign('man',array('潘安','宋玉','龙阳君','兰陵王'));

$smarty->assign('selected',array(6,7));

$man = array(
	5 => '潘安',
	6 => '宋玉',
	7 => '龙阳君',
	8 => '兰陵王'
);
$smarty->assign('man1',$man);
$smarty->display('checkbox.tpl');