<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h2>html_checkboxes的用法</h2>
	<label for="">请选出你心中的男神（可以多选哦）：</label>
	{html_checkboxes name="man" values=$man output=$man selected='宋玉'}
	
	<br>
	
	<label for="">请选出你心中的男神（可以多选哦）：</label>
	{html_checkboxes name="man1" values=$sn output=$man selected=$selected}

	<br>
	
	<label for="">请选出你心中的男神（可以多选哦）：</label>
	{html_checkboxes name="man2" options=$man1 selected=$selected}

	<!--
	 	<input type="checkbox" name = 'gender' value="男" > 男
		<input type="checkbox" name = 'gender' value="女" > 女
	-->
</body>
</html>