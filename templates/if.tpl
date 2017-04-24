<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>if相关函数的使用</h2>
	<p>你的IQ是：{$iq}</p>
	<p>适合你的武功秘籍是：
		{if $iq >= 130} 
			乾坤大挪移
		{elseif $iq < 130 && $iq >= 110}
			九阳神功
		{elseif $iq < 110 && $iq >= 90}
			降龙十八掌
		{elseif $iq < 90 && $iq >= 70}
			打狗棒法
		{else}
			葵花宝典
		{/if}
	</p>
</body>
</html>