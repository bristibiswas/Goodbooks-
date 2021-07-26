<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/assests/bootstrap.min.css">
    <link rel="stylesheet" href="app/assests/bootstrap.min.css.map">
    <title>Register | GoodBooks!</title>
</head>
<body>

<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3 mb-2 bg-warning text-dark">
<div class="container-fluid"><h1 class="text-light">GoodBooks!</h1></div>
  <button class="btn btn-primary me-md-2" type="button"  onclick="document.location='register.php'">Register</button>
  <button class="btn btn-primary" type="button"  onclick="document.location='index.php'">Login</button>
</div>
<!-- form -->
<form action="app/auth-register.php" method="post">
<div class="container mt-4">
				<div class="row justify-content-center">
					<div class="col-3 text-center shadow-lg rounded-3">
                    <img src="app/assests/pic.png" class="rounded mx-auto d-block" width="200" height="200" alt="app/assests/pic.png">
						<h1 class="mt-3 text-info">GoodBooks!</h1>
						<h3 class="mt-1">Register</h3>

                        <input
							class="form-control mt-3"
							type="text"
							name="userName"
							id=""
							placeholder="name"
						/>
						<input
							class="form-control mt-3"
							type="email"
							name="email"
							id=""
							placeholder="Email"
						/>
                        <input
							class="form-control mt-3"
							type="text"
							name="uPhone"
							id=""
							placeholder="Phone Number"
						/>
						<input
							class="form-control mt-3"
							type="password"
							name="pass"
							id=""
							placeholder="Password"
						/>
						<button
							class="
								btn
								text-white
								btn-primary btn-outline-success
								container-fluid
								my-3
							"
							type="submit"
							name="register"
						>
							Create Account
						</button>
					</div>
				</div>
			</div>
			</form>

    
</body>
</html>