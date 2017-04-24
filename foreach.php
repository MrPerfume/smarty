<?php
include "libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
//分配数据
//数组的分配
$user = array('张无忌','李寻欢','王语嫣','赵敏');
$smarty->assign('user',$user);

$hero = array('id'=>1,'name'=>'黄药师','nickname'=>'东邪');

//二维数组
$heros = array(
	array('id'=>1,'name'=>'黄药师','nickname'=>'东邪','weapon'=>'萧'),
	array('id'=>2,'name'=>'欧阳锋','nickname'=>'西毒','weapon'=>'蛇'),
	array('id'=>3,'name'=>'一灯大师','nickname'=>'南帝','weapon'=>'手指'),
	array('id'=>4,'name'=>'洪七公','nickname'=>'北丐','weapon'=>'打狗棒'),
	array('id'=>5,'name'=>'王重阳','nickname'=>'中神通','weapon'=>'浮尘')
);
$smarty->assign('hero',$hero);
$smarty->assign('heros',$heros);
$smarty->display("foreach.tpl");