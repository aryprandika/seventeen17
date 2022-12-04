<?php 
session_start();
include_once('../shop17/masuk/db_koneksi.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location: ../shop17/admin/index1.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:../shop17/toko/index.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:../shop17/toko/index.php');
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login Form</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../shop17/bootstrap/css/bootstrap.css">


    <style>
    .main{
		height: 100vh;
	}

	.login-box{
		width: 500px;
		height: 500px;
		box-sizing: border-box;
		border-radius: 10px;
	}
    </style>
  </head>
  <div class="main d-flex flex-column justify-content-center align-items-center">
		<div class="login-box p-5 shadow">
  <body class="container col-md-6">
    <form class="form-signin" method="post" action="">
  <h1 class="h3 mt-4 font-weight-normal text-center">Sign In Please</h1>
  <label for="username">Username</label>
  <input type="text" id="username" class="form-control mb-2 mt-2" placeholder="Masukkan Username" name="username" required>
  <label for="password">Password</label>
  <input type="text" id="password" class="form-control mb-2 mt-2" placeholder="Masukkan Password" name="password" required>
  <div class="checkbox col-mb-6">
    <label class="mb-4">
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block col-md-12" type="submit" name="login">Sign in</button>
  <a href="../shop17/masuk/register1.php" class="btn btn-lg btn-success btn-block col-md-12 mt-3">Register</a>
</form>
</body>
</html>