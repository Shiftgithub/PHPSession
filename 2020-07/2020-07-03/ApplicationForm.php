<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Application From</title>
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="https://kit.fontawesome.com/a076d05399.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body class="container">
	<!-- Header Part Starts-->
	<div class="header">
		
		<p><i class="fas fa-address-book"></i> +8801400593322</p>
	</div>
	
	<!-- Menu Part Starts -->
	
	<div class="menu">
		<a class="active" href="#home">Home</a>
		<a href="#news">News</a>
		<a href="#contact">Contact</a>
		<a href="#about">About</a>
	</div>
	
	<form method="get">
	
		<!-- Application From Part Starts-->
		<div class="applicationf">
			<input type="text" name="name" placeholder="Your name"><br />
			<br />
			<input type="text" name="fname" placeholder="Father's Name"><br/>
			<br />
			<input type="text" name="mname" placeholder="Mother's Name" /><br />
			<br />
			<input type="text" name="num" placeholder="Contact Number" /><br />
			<br />
			<input type="email" name="email" placeholder="Email" /><br />
			<br />
			<input type="text" name="preadd" placeholder="Present Address" /><br />
			<br />
			<input type="text" name="peradd" placeholder="Permanent Address" /><br />
		</div>
		
		<!-- Submit part starts-->
		<div class="submit">
			<input type="submit" value="Submit" name="submit"/>
		</div>
	</form>
	
</body>
</html>






























<?php
		

		if(isset($g['submit'])){
			$g=$_GET;
			$n=$g['name'];
		$fn=$g['fname'];
		$mn=$g['mname'];
		$nu=$g['num'];
		$em=$g['email'];
		$pre=$g['preadd'];
		$pro=$g['peradd'];
			echo "Name : $n<br>";
			echo "Father Name : $fn<br>";
			echo "Mother Name : $mn<br>";
			echo "Contact Number : $nu<br>";
			echo "Email Address : $em<br>";
			echo "Present Addentress : $pre<br>";
			echo "Permanent Addentress : $per<br>";
		}
?>