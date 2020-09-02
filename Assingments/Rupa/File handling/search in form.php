  <html>
<head>
<titel></title>
	<style type="">
.box{
	  
	height: 230px;
	width: 400px;
	background: #383838;
	margin-left: 200px;
	margin-top: 200px;
    box-shadow: 1px 1px 2px black, 0 0 25px #696969, 0 0 5px darkblue;
    border-radius: 2%;
}
.input-box{
     margin: 10px;
}


	</style>
</head>
<body>
<div class="box">
	<h2 style="color: white;margin: 15px; ">Student's Information</h2>

<form method="POST"action="formresult.php">
<div class="search-box">
<input type="search" name="search" style="margin-left: 8px; border-radius: 5%;padding: 5px;"placeholder="search an ID">
<button class="btn"name="btn">Search</button>
</div>
<div class="input-box">
	
		<label for="" style=" color: white;">Username</label>
	<input type="text" name="username" autocomplete="off" >
	
	
</div>
<div class="input-box">
 <label style="margin-left: 28px;  color: white;">Email</label> 
 <input type="email" name="email"autocomplete="off">
</div>
<div class="input-box">
<label style="margin-left: 5px; color: white;">Password </label>
<input type="password" name="password" autocomplete="off">
</div>

<input type="submit" name="save"value="Save"/ style="color:white; 
background:#A9A9A9;margin: 10px;padding: 8px;border-radius: 10%; ">


</form>
</div>
</body>
</html>
