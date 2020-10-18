<!-- db_connection join !-->
<?php  include 'db_connection.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Turan</title>
	<!--Add page Responsive Web Design link  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Add Bootstrap link-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<!-- fontawesome cdn-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php require_once "processing.php"; ?>
	<div class="container">
		 <form method="POST" action="processing.php">
      <input type="hidden" name="id" value="<?= $id ?>" >
		 	<div class="col-6">
		 		<label>Name:</label>
		 	</div>
		 	<div class="col-6">
		 		 <input type="text" name="name" value="<?= $name; ?>">
    		</div>
    		<div class="col-6">
		 		<label>Email:</label>
		 	</div>
		 	<div class="col-6">
		 		 <input type="email" name="email" value="<?= $email; ?>">
    		</div>
    		<div class="col-6">
		 		<label>Password:</label>
		 	</div>
		 	<div class="col-6">
		 		 <input type="password" name="password" value="<?= $password; ?>">
    		</div><br>
    
    		<div class="col-12">
    			<?php  if ($update==true): ?>
    	 		<button type="submit" name="update"  class="btn btn-warning">Update</button>
    	 		<?php else :?>
    	 		<button type="submit" name="submit" class="btn btn-success">Submit</button>
    			<?php endif;?>
    		</div> 
    		
  </form>
	</div><br><br>


		<div class="container">
			<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<?php 
		$rows = $connection->query("SELECT * FROM details")  or die($connection->error);
		$counter = 0 ;
		foreach($rows as $row) : $counter++ ?>
      <td><?php echo $counter ;?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><a href="index.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
        <a href="processing.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
      <?php endforeach; ?>
 
  </tbody>
</table>
		</div>
	
</body>

</html>
