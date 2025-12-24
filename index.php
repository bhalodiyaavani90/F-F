	<?php
	include('include/header.php');
	
	$p_q = "select * from product_add
			order by p_id desc
			limit 0, 6";

	$p_res = mysqli_query($link,$p_q);

?>
<div class="banner-agile">
	<div class="container">
		<h2>WELCOME TO F&F WORLD </h2>
		<p>Your one-stop destination for stylish and affordable Fashion.Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
		<a href="about.php">Read More</a>
	</div>
</div>

<div class="banner-bootom-w3-agileits">
	<div class="container">
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">

		<?php
			$cat_q = "select * from category
					where cat_id = 5";

			$cat_res = mysqli_query($link,$cat_q);

			$cat_row = mysqli_fetch_assoc($cat_res);
		?>	
				</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="top-products">
	<div class="container">
		<h3>F&F</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Latest Product</span></li>
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						
			<?php
				while($p_row = mysqli_fetch_assoc($p_res))
				{
					echo '
						<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="clothes_single.php?id='.$p_row['p_id'].'"><div class="product-img" style="margin-top:15px";>
							<div style="height:300px";>
								<img src="upload/'.$p_row['p_img'].'" alt="" style="width:100%;height:100%";/>
							</div>
								<div class="p-mask">
									<form action="#" method="post">
									</form>
								</div>
							</div></a>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star yellow-star" aria-hidden="true"></i>
							<i class="fa fa-star gray-star" aria-hidden="true"></i>
							<h4>'.$p_row['p_nm'].'</h4>
							<h5><i class="fa fa-rupee"></i>'.$p_row['p_price'].'</h5>
						</div>';
				}
		?>
						
						<div class="clearfix"></div>
						</div>
					</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});		
	</script>
<div class="fandt">
	<div class="container">
		<div class="col-md-6 features">
			 <h3>Our Services</h3>
			<div class="support">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-user " aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>24/7 online free support</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="shipping">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-bus" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>Free shipping</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="money-back">
				<div class="col-md-2 ficon hvr-rectangle-out">
					<i class="fa fa-money" aria-hidden="true"></i>
				</div>
				<div class="col-md-10 ftext">
					<h4>100% money back</h4>
					<p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
				</div>	
				<div class="clearfix"></div>				
			</div>
		</div>
		<div class="col-md-6 testimonials">
			<div class="test-inner">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<?php
							$g_q = "select * from gallery
									order by g_id desc
									limit 0, 3";

							$g_res = mysqli_query($link,$g_q);

							while($g_row = mysqli_fetch_assoc($g_res))
							{
								echo '<article style="position: absolute; width: 100%; opacity: 0;"> 
										<div class="banner-wrap">
											<div style="height:120px;">
												<img src="upload/gallery/'.$g_row['g_img'].'" alt=" " class="img-responsive" style="height:100%;"/>
											</div>
											<p>Nam elementum magna id nibh pretium suscipit varius tortor. Phasellus in lorem sed massa consectetur fermentum. Praesent pellentesque sapien euismod.</p>
											<h4>'.$g_row['g_title'].'</h4>
										</div>
									</article>';
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
</div> 
<?php
	//include('include/footer.php');
?>
