<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<form action="/pages" method="POST">
	{!! csrf_field() !!}
	Имя: <br>
		<input type="text" name="name"><br>
		<input type="text" name="text"><br>

		<input type="submit" value="Добавить!">
	</form>
</body>
</html>