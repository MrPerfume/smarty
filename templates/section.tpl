<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>section内置函数的使用</h2>
	
	<ul>
		{section name = 'idx' loop = 3}
			<li>{$hero[idx]}</li>

		{/section}
	</ul>

	<ul>
		{section name = 'item' loop = $user max = 2}
			<li>{$user[item]} --- {$user1[item]}</li>
		{/section}
	</ul>
</body>
</html>