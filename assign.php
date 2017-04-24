<?php
include "libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//分配变量
$smarty->assign('score',100); //100
$smarty->assign('love',false); //空
//数组的分配
$user = array('张无忌','李寻欢','王语嫣','赵敏');
$smarty->assign('user',$user);

$hero = array('id'=>1,'name'=>'黄药师','nickname'=>'东邪');
$smarty->assign('hero',$hero);
$smarty->display("assign.tpl");