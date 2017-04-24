<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		{literal}
			.odd{background: #ddd;}
		{/literal}
	</style>
</head>
<body>
	<h1>foreach函数的使用</h1>
	<h2>一维数组</h2>
	<ul>
		{foreach $user as $k => $v} 
			<li>{$k}---{$v}</li>
		{/foreach}
	</ul>
	<br>
	<ul>
		{foreach $hero as $k => $v}
			<li>{$k}---{$v}</li>
		{/foreach}
	</ul>
	<h2>二维数组</h2>
	<table width="600" border="1">
		<tr><th>编号</th><th>姓名</th><th>绰号</th><th>武器</th></tr>
		{foreach $heros as $v} 
			<tr>
				{foreach $v as $v1}
					<td>{$v1}</td>
				{/foreach}
			</tr>
		{/foreach}
	</table>

	<br>
	<table width="600" border="1">
		<tr><th>编号</th><th>姓名</th><th>绰号</th><th>武器</th></tr>
		{foreach $heros as $v} 
			<tr {if $v@first} class='first' {/if} >
				<td>{$v.id}</td>
				<td>{$v.name}</td>
				<td>{$v.nickname}</td>
				<td>{$v['weapon']}</td>
			</tr>
		{/foreach}
	</table>
	
	{* 隔行换色 *}
	<table width="600" border="1">
		<tr><th>编号</th><th>姓名</th><th>绰号</th><th>武器</th></tr>
		{foreach $heros as $v} 
			<tr class = "{if $v@iteration is odd}odd{else}even{/if}" >
				<td>{$v.id}</td>
				<td>{$v.name}</td>
				<td>{$v.nickname}</td>
				<td>{$v['weapon']}</td>
			</tr>
		{/foreach}
	</table>
</body>
</html>