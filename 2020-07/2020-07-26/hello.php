
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		if(isset($_POST['hello'])){
			$button = $_POST['hello'];

			if($button == 'add'){
				$input = $_POST['input'];
				$operation = "add";
			}

			if($button == 'sub'){
				$input = $_POST['input'];
				$operation = "sub";
			}

			if($button == 'submit'){
				$input = $_POST['input'];
				$hidden = $_POST['hiddeninput'];
				$operation = $_POST['operation'];

				if($operation == 'add'){
					$result = $input + $hidden;
					echo $result;
				}elseif($operation == 'sub'){
					$result = $hidden - $input ;
					echo $result;
				}
			}
		}
	?>
	<hr>
	<form method="POST">
		input <input type="text" name="input">
			<br>
		hidden input <input type="text" name="hiddeninput" 
			value="<?= empty($input)? "" : "$input" ?>">
			<br>
		opration <input type="text" name="operation" 
			value="<?= empty($operation)? "" : "$operation" ?>">
		<br>
		<button type="submit" name="hello" value="add">+</button>
		<button type="submit" name="hello" value="sub">-</button>
		<button type="submit" name="hello" value="submit">=</button>

	</form>
</body>
</html>