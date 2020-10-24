<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="Fileoutput.php" method="POST" accept-charset="utf-8">
		Name: <input type="text" name="name"> <br><br>
		Roll: <input type="text" name="roll"> <br><br>
		Subject: <input type="text" name="sub"><br><br>

		<button type="submit" name="save">SAVE</button><br><br><br>
	</form>

	<form action="search.php" method="POST" accept-charset="utf-8">
		Information of a student: <input type="text" name="info">
		<button type="submit" name="search">Search</button>
	</form>
</body>
</html>