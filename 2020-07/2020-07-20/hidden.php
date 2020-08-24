
<!DOCTYPE html>
<html>
<body>

<form method="POST" action="#">
	<input type="hidden" name="hidden" value="<?= $firstvalue ?>" >

Number : <input type="text" name="input1" value="<?= $result ?>" />
<br>
<button type="submit" name="operator" value="+">+</button>
<hr>
<button type="submit" name="submit">Submit</button>


</form>


<?php
if(isset($_POST['opreator'])){
	$firstvalue = $_POST['input1'];
}
elseif(isset($_POST['submit'])){

	$input = $_POST['input1'];

    $firstvalue = $_POST['hidden'];
    
    $result = $input + $firstvalue;
}
?>
</body>
</html>
