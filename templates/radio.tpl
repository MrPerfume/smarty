<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h2>html_radios的用法</h2>
	<label for="">请选出你心目中的女神：</label>
	{html_radios name = 'beauty' values = $beauty output = $beauty selected='西施'}
	
	<br>

	<label for="">请选出你心目中的女神：</label>
	{html_radios name = 'beauty1' values = $sn output = $beauty selected='3'}

	<br>

	<label for="">请选出你心目中的女神：</label>
	{html_radios name = 'beauty2' options=$beauty1 selected='3'}

	<!--
	 	<input type="radio" name = 'gender' value="男" > 男
		<input type="radio" name = 'gender' value="女" > 女
	-->

</body>
</html>