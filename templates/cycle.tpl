<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		{literal}
			.odd{background: #eee;}
		{/literal}
	</style>
</head>
<body>
	<h2>cycle的用法</h2>
	<table width="600" border="1">
		<tr><th>编号</th><th>姓名</th><th>绰号</th><th>武器</th></tr>
		{foreach $heros as $v}
			<tr class="{if $v@iteration is odd}odd{else}even{/if}">
				<td>{$v.id}</td>
				<td>{$v.name}</td>
				<td>{$v.nickname}</td>
				<td>{$v['weapon']}</td>
			</tr>
		{/foreach}
	</table>

	<br>
	<table width="600" border="1">
		<tr><th>编号</th><th>姓名</th><th>绰号</th><th>武器</th></tr>
		{foreach $heros as $v}
			<tr class="{cycle values = 'one,two,three'}">
				<td>{$v.id}</td>
				<td>{$v.name}</td>
				<td>{$v.nickname}</td>
				<td>{$v['weapon']}</td>
			</tr>
		{/foreach}
	</table>

</body>
</html>