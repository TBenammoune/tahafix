<?php
session_start();
include "admin/les classe/userclass.php";

$conn = mysqli_connect('localhost', 'root', '', 'db_gestionvols');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

   $login = new User; 
   $login->login($username, $pass);
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/logi.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="index.php" method="POST" class="login100-form">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36">
						<input class="input100" type="text"  name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12">
						<!-- <span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span> -->
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>
                    

					<div class="container signin">
						<p>Already have an account? <a href="inscription.php">Sign in</a>.</p>
					  </div>

				</form>
                                        
			</div>
		</div>
	</div>


</body>
</html>


