<?php
	$catid = $_GET['id'];
	include('include/header.php');

	$p_q = "SELECT * FROM product_add WHERE p_cat = $catid";
	$p_res = mysqli_query($link, $p_q);
?>

<style>
	.product-img-square {
		width: 100%;
		aspect-ratio: 1 / 1;
		overflow: hidden;
		border: 1px solid #eee;
		border-radius: 8px;
	}

	.product-img-square img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		transition: transform 0.3s ease;
	}

	.product-img-square img:hover {
		transform: scale(1.05);
	}
</style>

<div class="content">
	<div class="container">
		<div class="row">
			<?php
			$count = 0;
			while ($p_row = mysqli_fetch_assoc($p_res)) {
				if ($count % 3 == 0) echo '<div class="row">'; // Start a new row every 3 items
			?>
				<div class="col-md-4 col-sm-6 col-xs-12 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s" style="margin-bottom: 30px;">
					<a href="clothes_single.php?id=<?php echo $p_row['p_id']; ?>">
						<div class="product-img-square" style="margin-top: 10px;">
							<img src="upload/<?php echo $p_row['p_img']; ?>" alt="<?php echo $p_row['p_nm']; ?>">
						</div>
					</a>
					<div class="product-info text-center">
						<div class="stars" style="color: #FFD700;">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<h4><?php echo $p_row['p_nm']; ?></h4>
						<h5><i class="fa fa-rupee"></i> <?php echo $p_row['p_price']; ?></h5>
					</div>
				</div>
			<?php
				$count++;
				if ($count % 3 == 0) echo '</div>'; // Close the row after 3 items
			}
			if ($count % 3 != 0) echo '</div>'; // Close last row if not already closed
			?>
		</div>
	</div>
</div>

<?php include('include/footer.php'); ?>
