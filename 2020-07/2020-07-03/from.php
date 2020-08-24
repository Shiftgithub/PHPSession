<?php
		$g=$_GET;


		$n=$g['name'];
		$fn=$g['fname'];
		$mn=$g['mname'];
		$nu=$g['num'];
		$em=$g['email'];
		$pre=$g['preadd'];
		$pro=$g['peradd'];
		if(isset($g['submit'])){
			echo "Name : $n<br>";
			echo "Father Name : $fn<br>";
			echo "Mother Name : $mn<br>";
			echo "Contact Number : $nu<br>";
			echo "Email Address : $em<br>";
			echo "Present Addentress : $pre<br>";
			echo "Permanent Addentress : $per<br>";
		}
?>