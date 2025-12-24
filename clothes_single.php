<?php
		include('include/header.php');

		$cid = $_GET['id'];

		$c_q = "select * from product_add
				where p_id = $cid";

		$c_res = mysqli_query($link,$c_q);

		$c_row = mysqli_fetch_assoc($c_res);


		/* Image Resolution
		
		$img  = "upload/".$c_row['p_img'];
		
		list($width,$height) = getimagesize($img)
		
		<?php echo $width."X".$height;?>
		*/
?>


<div class="products">	 
		<div class="container">  
			<div class="single-page">
				<div class="single-page-row" id="detail-21">
					<div class="col-md-6 single-top-left">		
						<div class="thumb-image detail_images"> <img src="upload/<?php echo $c_row['p_img']?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
					</div>
				
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $c_row['p_nm']?></h3>
						<p>Processing Time:<?php echo $c_row['p_process']?> </p>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">20 reviews</li>
							<li><a href="addreview.php">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
						<h4 class="item_name">Price:</h4>
							<ul>
								<li><i class="fa fa-rupee"></i><?php $dis = $c_row['p_price'] * ($c_row['p_discount']/100); echo $c_row['p_price'] - $dis;?></li>  
								<li><del><i class="fa fa-rupee"></i><?php echo $c_row['p_price']?></del></li> 
								<li><span class="w3off">Upto <?php echo $c_row['p_discount']?>% OFF</span></li> 
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $c_row['p_desc']?> </p>
						<form action="#" method="post">
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i>
							<a href="addtocart.php?nm=<?php echo $c_row['p_nm'];?>&id=<?php echo $c_row['p_id'];?>&price=<?php echo $c_row['p_price'];?>
							&discount=<?php echo $c_row['p_discount'];?>&img=<?php echo $c_row['p_img'];?>" style="color:white";>Add to cart</a></button>
						</form>
<!--<button class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Add to Wishlist</button>-->

					</div>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">About this item</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
							<?php echo $c_row['p_fdesc']?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<?php echo $c_row['p_addinfo']?>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (5) <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //collapse --> 
		</div>
	</div>


<?php

		include('include/footer.php');
?>