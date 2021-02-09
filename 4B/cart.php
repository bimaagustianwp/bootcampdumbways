<?php 
$title = "Cart - Toko Sepeda DW Bike";
include "header.php";
session_start(); 
if(empty($_SESSION['name'])){
    echo "<script>alert('Silahkan login untuk melihat cart');
		 window.location='login.php';</script>";
} else {
}
?>

<main class="container">

<div class="album py-5 bg-light">
	<div class="container">
		<div class="col-md-5 col-lg-12 order-md-last">
			<h4 class="d-flex justify-content-between align-items-center mb-3">
			<span class="text">Your cart</span>
			</h4>
			
			<ul class="list-group mb-3">
			<?php
			$total = 0;
			$data = mysqli_query($koneksi, "select *, cart.id as cartid from cart, cycle where cycle.id=cart.id_cycle and id_user=".$_SESSION['id_user']);
			while($row = $data->fetch_assoc()){
				$total = $total + $row['cart_price'];
			?>
				<li class="list-group-item d-flex justify-content-between lh-sm">
					<div>
						<h6 class="my-0"><?=$row['name'];?></h6>
						<span class="text-success">Rp<?=number_format($row['price'],0,"",".");?></span>
					</div>
					<a href="proses.php?hapusCart&cartid=<?=$row['cartid'];?>">
						<button type="button" class="btn  btn-outline-danger">Hapus</button>
					</a>
				</li>
				<?php
			}
			?>
				<li class="list-group-item d-flex justify-content-between">
					<span>Total</span>
					<strong>Rp<?=number_format($total,0,"",".");?></strong>
				</li>
			</ul>
		</div>
	</div>
</div>

</main><!-- /.container -->


<?php
include "footer.php";
?>