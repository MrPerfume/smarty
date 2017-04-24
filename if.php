<?php
include "libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
//分配数据
$smarty->assign('iq',120);
$smarty->display("if.tpl");
