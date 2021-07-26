<?php 

//starting session
session_start();
//removing all session variable
session_unset();
//destroying php session
session_destroy();
//redirecting to the index page in 3 sec
header("refresh:3; url=index.php")



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
    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-3 mb-2 bg-warning text-dark">
<div class="container-fluid"><h1 class="text-light">GoodBooks!</h1></div>
  <button class="btn btn-primary me-md-2" type="button"  onclick="document.location='register.php'">Register</button>
  <button class="btn btn-primary" type="button"  onclick="document.location='index.php'">Login</button>
</div>
    <div class="container text-center text-info my-5">
      <h1>Logout Successful !!</h1>
      <h1>Redirecting to Login Page in 3 Seconds</h1>
    </div>
	</body>
</html>