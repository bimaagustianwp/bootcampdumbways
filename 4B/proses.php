<?php

include "koneksi.php";

if (isset($_POST['login'])) {
    $email=$_POST['email']; 
	/*$password=md5($_POST['password']); */
	$password=$_POST['password']; 
	$query="select * from user where email='$email' and password='$password'";
	$result=mysqli_query($koneksi, $query); 
	    if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
	        session_start(); 
			$_SESSION['name'] = $row['name'];
			$_SESSION['id_user'] = $row['id'];
	        echo "<script>window.location='index.php';</script>";
	    } else {
	        echo "<script>alert('Periksa Kembali Username dan Password Anda !'); window.location='login.php';</script>";
	    }
}

elseif (isset($_GET['logout'])) {
	session_start();
	session_unset();
	session_destroy();
	echo "<script>window.location='index.php';</script>";
}


elseif (isset($_GET['addToCart'])) {
	session_start();
	$cid = $_GET['cid'];
	$price = $_GET['price'];
	$id_user = $_SESSION['id_user'];
	
	$query = mysqli_query($koneksi,"insert into cart values('','$id_user','$cid',1,'$price')");
	echo "<script>alert('Item ditambah ke keranjang');
		 window.location='index.php';</script>";
}
elseif (isset($_GET['loginAddToCart'])) {
	echo "<script>alert('Silahkan login untuk menambahkan item ke keranjang');
		 window.location='login.php';</script>";
}

elseif (isset($_GET['hapusCart'])) {
	$cartid = $_GET['cartid'];

	mysqli_query($koneksi, "DELETE FROM cart WHERE  id='$cartid'")or die(mysqli_error($koneksi));

	echo "<script>alert('Item dihapus');
		 window.location='cart.php';</script>";
}












?>