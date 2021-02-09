<?php 
include "koneksi.php";
session_start(); 
if(!empty($_SESSION['name'])){
    echo "<script>window.location='index.php';</script>";
} else {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toko Sepeda DW Bike">
    <meta name="author" content="Bima Agustian Wanaputra">
    <title>Login DW Bike</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
</head>
<body>

  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="POST" action="proses.php">
    <img class="mb-4" src="img/Logo Bima.png" alt="" width="120">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>


<?php
include "footer.php";
?>