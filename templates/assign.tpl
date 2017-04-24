<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>标量类型</h2>
	<p>{$score}</p>
	<p>{$love}</p>

	<h2>索引数组</h2>
	<ul>
		<li>{$user[0]}</li>
		<li>{$user['1']}</li>
		<li>{$user.2}</li>
		<li>{$user.3}</li>
	</ul>

	<h2>关联数组</h2>
	<ul>
		<li>{$hero['id']}</li>
		<li>{$hero.name}</li>
		<li>{$hero.nickname}</li>
	</ul>

</body>
</html>