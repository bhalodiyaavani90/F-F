 <?php
	include('include/header.php');
	
	$g_q = "select * from gallery";

	$g_res = mysqli_query($link,$g_q);

?>

<div class="banner-agile">
	<div class="container">
		<h2>WELCOME TO F&F WORLD </h2>

		<p>Your one-stop destination for stylish and affordable Fashion.Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
		<a href="about.php">Read More</a>
	</div>
</div>

<div class="top-products">
	<div class="container">
		<h3>Gallery</h3>
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Ours Branded Products</span></li>
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						
			<?php
				while($g_row = mysqli_fetch_assoc($g_res))
				{
					echo '
						<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
							<a href="#"><div class="product-img" style="margin-bottom:50px;">
							<div style="height:300px";>
								<img src="upload/gallery/'.$g_row['g_img'].'" alt="" style="width:100%;height:100%";/>
							</div>
								<div class="p-mask">
									<h1 style="height:50px; color:#000;">'.$g_row['g_title'].'</h1>
								</div>
							</div></a>
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
	
				<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 
								
</div>


<?php
	//include('include/footer.php');
?> 