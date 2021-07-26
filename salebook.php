<?php session_start() ?>
<?php
 if($_SESSION["sessionAuth"]!=true){
	header("Location: index.php");
}
 $app_user=$_SESSION["sessionName"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/assests/bootstrap.min.css">
    <link rel="stylesheet" href="app/assests/bootstrap.min.css.map">
    <title>Dashboard | GoodBooks!</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    
    
        <div class="container-fluid bg-secondary bg-warning">
			<div class="row justify-content-between align-items-center">
				<div class="col-auto fs-1 text-light mb-1">GoodBooks</div>
				<div class="col-auto">
					<a class="btn btn-light" href="dashboard">Dashboard</a>
					<a class="btn btn-light" href="admin-store">Library</a>
					<a class="btn btn-light" href="salebook">Sale Book</a>
					<a class="btn btn-light" href="my-advertise">My Advertise</a>
					<a class="btn btn-dark" href="logout">Logout</a> <br>
                    
				</div>
			</div>
		</div>
        
      
      
    </div>
  </div>
</nav>
<div class="fs-1 fw-bold text-center my-1">Hello, <?php echo $app_user ?></div>
		<form action="app/auth-salebook.php" method="POST">
		<div class="row justify-content-center mt-3">
			<div class="col-2 text-center">
				<h1 class="fs-4">- : Advertise Your Book Here : -</h1>
				<input
					class="form-control mt-3"
					type="text"
					name="bookName"
					id=""
					placeholder="Your Book Name"
				/>
				<input
					class="form-control mt-3"
					type="text"
					name="bookPrice"
					id=""
					placeholder="Price"
				/>
				<button class="btn btn-secondary container-fluid mt-3" name="bSubmit" type="submit">
					submit
				</button>
			</div>
		</div>
		</form>
		



</body>

</html>