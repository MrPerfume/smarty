<?php
include "libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

//定义一个常量
define("ROOT", getcwd()); 
$smarty->display("hold.tpl");