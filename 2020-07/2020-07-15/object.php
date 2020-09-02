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
		class Books{

			public $title;
			public $color;

			public function setName($title){
				$this->name = $title;
			}

			public function setColor($color){
				$this->color = $color;
			}
			public function getName(){
						return 	$this->name;
			}
			public function getColor(){
						return	$this->color;
			}


		}
	?>


	<?php

		$physices = new Books;

		$chemistry = new Books;

		

		$physices->setName('Physices Books');

		print $physices->getName();
	?>
</body>
</html>