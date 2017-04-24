<?php
//1.引入smarty类
include 'libs/Smarty.class.php';
//2.实例化smarty对象
$smarty = new Smarty(); 
//3.设置相关属性
$smarty->template_dir = "templates/"; //模板目录
$smarty->compile_dir = "templates_c"; //编译目录
//修改定界符
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
//4.分配数据
$smarty->assign('title','smarty模板引擎');
$smarty->assign('content','smarty模板引擎 是一个强大的模板引擎!');
//5.载入视图
$smarty->display('index.html');