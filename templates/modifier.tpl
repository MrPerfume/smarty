<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>变量修饰器的用法</h2>

	<p>当前时间是：{$time}</p>
	<p>当前时间是：{$smarty.now|date_format:'%Y-%m-%d %T'}</p>

	<p>{$poem|truncate:10:'*'|upper}</p>

	<p>{"hello"|str_repeat:$number}</p>
</body>
</html>