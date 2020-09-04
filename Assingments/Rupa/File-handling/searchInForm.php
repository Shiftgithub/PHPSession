<html>

<head>
	<titel>Information Form</title>
		<style>
		body{
			background:linear-gradient(to bottom, #99ccff 0%, #ccffff 100%);
		}
			.box {
				height: 350px;
				width: 370px;
				background: #383838;
				margin-left: 200px;
				margin-top: 100px;
				box-shadow: 1px 1px 2px black, 0 0 25px #696969, 0 0 5px darkblue;
				border-radius: 2%;
			}

			.input-box {
				margin: 20px;
			}
			.btn-btn{
				background-color:  #ff4d4d;
				border: none;
                border-radius: 15px;
                font-size: 16px;
                width: 70px;
			}
			
			.btn-btn:hover {background:red;}
			.btn{

				display: inline-block;
  padding: 5px 10px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:  #ff4d4d;
  border: none;
  border-radius: 10px;
			}

.btn:hover {background: #ff9999;}

.btn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
		</style>
</head>

<body>
	<div class="box">
		<h2 style="color: white;margin: 15px; ">Student's Information</h2>
		<form method="POST" action="formresult.php">
			<div class="search-box">
				<input type="search" name="search" style="margin-left: 8px; border-radius: 5%;padding: 5px;" placeholder="search an ID">
				<button class="btn" name="btn">Search</button>
			</div>
			<div class="input-box">
				<label for="" style=" color: white;">Student's ID:</label>
				<input type="text" name="username" autocomplete="off" style="margin-left: 52px;">
			</div>
			<div class="input-box">
				<label style="margin-left: 5px;  color: white;">Name:</label>
				<input type="text" name="name" autocomplete="off" style="margin-left: 89px;">
			</div>
			<div class="input-box">
				<label style="margin-left: 5px;  color: white;">Email:</label>
				<input type="email" name="email" autocomplete="off" style="margin-left: 89px;">
			</div>
			<div class="input-box">
				<label style="margin-left: 5px;  color: white;">Contact Number:</label>
				<input type="number" name="number" autocomplete="off"style="margin-left: 22px;">
			</div>
			<div class="input-box">
				<label style="margin-left: 5px; color: white;">Address: </label>
				<input type="text" name="address" autocomplete="off"style="margin-left: 75px;">
			</div>
			<input type="submit" class="btn-btn" name="save" value="Save"/ style="color:white; background:#380000;margin-left:22px;padding: 8px;border-radius: 10%; ">
		</form>
	</div>
</body>

</html>