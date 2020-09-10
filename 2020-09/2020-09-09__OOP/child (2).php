
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
    /**
     * @class Head
     * 
     */
    class Head{

        public function add($num1,$num2)
        {
            echo $this->num1+$this->num2."<br> ";
           
        }
		public function sub($num1,$num2)
        {
			
            echo $this->num1-$this->num2."<br> ";
           
        }
		public function mul($num1,$num2)
        {
			$this->num1=$n1;
			$this->num2=$n2;
            echo $this->num1*$this->num2."<br> ";
           
        }
		public function div($num1,$num2)
        {
			$this->num1=$n1;
			$this->num2=$n2;
            echo $this->num1/$this->num2."<br> ";
           
        }
    }
    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    if(isset($_POST["add"]))
	{
		$ad=new Head();
		$result = $ad->add($n1,$n2);
        print_r($result);
	}
        
	if(isset($_POST["sub"]))
        $su=new Head();
        $result = $su->sub($n1,$n2);
        print_r($result);
	if(isset($_POST["mul"]))
        $mul = new Head();
        $result = $mul->mul($n1,$n2);
        print_r($result);
	if(isset($_POST["div"]))
        $div = new Head();
        $result = $div->div($n1,$n2);
        print_r($result);
   
	echo "<form method='POST'>
	<input type='number' name='num1' >
   <input type='number' name='num2'>
   <input type='submit' name='add' value='add'>
   <input type='submit' name='sub' value='sub'>
   <input type='submit' name='mul' value='mul'>
   <input type='submit' name='div' value='div'></form>" ;
   
    ?>



    
   
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>