<?php
include 'libs/Smarty.class.php';
$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$hero = array('id'=>1,'name'=>'黄药师','nickname'=>'东邪');
$smarty->assign('hero',$hero);

$user = array('张无忌','李寻欢','王语嫣','赵敏');
$user1 = array('张三','李四','王五','赵六');

$smarty->assign('user',$user);
$smarty->assign('user1',$user1);
$smarty->display('section.tpl');