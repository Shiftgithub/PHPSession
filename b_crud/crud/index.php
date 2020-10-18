<!DOCTYPE html>
<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
	<form method="post" action="insert.php">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>email</label>
			<input type="text" name="email" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="delete" >Delete</button>
		</div>

	</form>

</body>
</html>