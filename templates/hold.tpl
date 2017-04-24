<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>保留变量</h2>
	<p>{$smarty.server.SERVER_NAME}</p>
	<p>{$smarty.now}</p>
	<p>{$smarty.version}</p>
	
	{* 对于常量而言，一定要先在php中定义，但无需分配 *}
	<p>{$smarty.const.ROOT}</p>
</body>
</html>