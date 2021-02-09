<?php 
$title = "Toko Sepeda DW Bike";
include "header.php";
?>

<main class="container">

<div class="album py-5 bg-light">
	<div class="container">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			
			<?php
			$data = mysqli_query($koneksi, "select *, cycle.name as cname, cycle.id as cid from  cycle, merk where cycle.id_merk=merk.id and stock!=0");
			while($row = $data->fetch_assoc()){
				
			?>
			<div class="col">
				<div class="card shadow-sm">
					<img class="bd-placeholder-img card-img-top" max-width="320px" src="img/<?=$row['image'];?>"/>
					<div class="card-body">
						<p class="card-text"><?=$row['cname'];?></p>
						<div class="d-flex justify-content-between align-items-center">
							<span class="text-success">Rp<?=number_format($row['price'],0,"",".");?></span>
							<span class="text"><?=$row['name'];?></span>
						</div>
						<div class="d-flex justify-content-between align-items-center">
							<small class="text-muted">Stock: <?=$row['stock'];?></small>
							<?php 
							if(empty($_SESSION['name'])){
								$addToCardLink = "proses.php?loginAddToCart";
							} else {
								$addToCardLink = "proses.php?addToCart&cid=".$row['cid']."&price=".$row['price'];
							}
							?>
							<a href="<?=$addToCardLink;?>">
								<button type="button" class="btn  btn-outline-primary">Add to cart</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>

		</div>
	</div>
</div>

</main><!-- /.container -->

<?php
include "footer.php";
?>