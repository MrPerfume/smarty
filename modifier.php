<?php
include 'libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$time = date("Y-m-d H:i:s");
$smarty->assign('time',$time);

$smarty->assign('poem','a一乡二里共三夫子不识四书五经竟敢教七八九子十分大胆,十室九贫凑得八两七钱六分五豪四厘尚且三心二意一等下流');
$smarty->assign('number',30);

$smarty->display('modifier.tpl');