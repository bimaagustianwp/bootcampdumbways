<?php 
include "koneksi.php";
session_start(); 
if(empty($_SESSION['name'])){
    $logClass = "primary";
    $logText = "Login";
    $logLink = "login.php";
} else {
    $logClass = "danger";
    $logText = "Logout";
    $logLink = "proses.php?logout";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Toko Sepeda DW Bike">
    <meta name="author" content="Bima Agustian Wanaputra">
    <link rel="icon" type="image/png" sizes="16x16" href="img/Logo Bima.png">
    <title><?=$title;?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">DW Bike</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
        </ul>
    <div class="d-flex">
        <a href="cart.php">
            <button class="btn btn-outline-success me-2">Cart</button>
        </a>
        <a href="<?=$logLink;?>">
            <button class="btn btn-outline-<?=$logClass;?>"><?=$logText;?></button>
        </a>
      </div>
    </div>
  </div>
</nav>
 