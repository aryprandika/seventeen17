<?php
 session_start();
 require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Admin</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>
<style>

	.main{
		height: 100vh;
	}

	.login-box{
		width: 500px;
		height: 360px;
		box-sizing: border-box;
		border-radius: 10px;
	}

	.no-decoration{
        text-decoration: none;
    }
</style>

<body>
	<div class="main d-flex flex-column justify-content-center align-items-center">
		<div class="login-box p-5 shadow">
			<form action="" method="post">
			<h1 class="h3 font-weight-normal text-center">Login</h1>
				<div>
					<label for="username">Username</label>
					<input type="text" class="form-control mt-3" name="username" 
					id="username">
				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" class="form-control mt-3" name="password" 
					id="password">
				</div>
				<div>
					<button class="btn btn-success form-control mt-3" type="submit" name="loginbtn">Login</button>
				</div>
			</form>
			
		</div>

		<div class="mt-3" style="width: 500px;">
			<?php
				if(isset($_POST['loginbtn'])){
					$username = htmlspecialchars($_POST['username']);
					$password = htmlspecialchars($_POST['password']);

					$query = mysqli_query($con, "SELECT * FROM users WHERE 
					username='$username'");
					$countdata = mysqli_num_rows($query);
					$data = mysqli_fetch_array($query);
					
					if($countdata>0){
						if (password_verify($password, $data['password'])){
							$_SESSION['username'] = $data['username'];
			            	$_SESSION['password'] = $data['password'];
							$_SESSION['login'] = true;
							header('location: ../admin/index.php');


						}
						else{
							?>
							<div class="alert alert-warning" role="alert">
								Password Salah
							</div>
						<?php
						}
					}
					else{
						?>
						<div class="alert alert-warning" role="alert">
								Akun tidak tersedia..
							</div>
						<?php
					}
				}
			?>
				<div class="mt-3">
					<a href="https://www.instagram.com/bec.ut/" class="no-decoration text-dark"><i class ="fa fa-phone"></i>&emsp;Hubungi Admin</a>
					</div>
		</div>
	</div>
	<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>