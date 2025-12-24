<?php
	include('include/header.php');
	include("include/config.php");
?>

<div class="top-products">
	<div class="container">
		<h3>Add To Cart</h3>
		
		<form action="addtocart.php" method="post">
		<table class="mycart" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Discount</th>
				<th>Rate</th>
				<th>Delete</th>
			</tr>
			
			<?php
				if(! empty($_SESSION['cart'])){

				$co = 1;
				$total = 0;
				foreach($_SESSION['cart'] as $id=>$val)
				{
					$rate = $val['qty'] * $val['price'];
					$dis = $rate * ($val['discount']/100);
					$fixprice = $rate - $dis;
					$total = $total + $fixprice;
					echo '<tr>
							<td>'.$co.'
							<td><img src="upload/'.$val['img'].'" style="width:40px"; />
							<td>'.$val['nm'].'
							<td><i class="fa fa-rupee"></i>'.$val['price'].'
							<td><input type="number" value="'.$val['qty'].'" min="1" name="'.$id.'" />
							<td> '.$val['discount'].' %
							<td><i class="fa fa-rupee"></i>'.$rate.'
							<td><a href="addtocart.php?id='.$id.'">&times;</a>
						</tr>';
						
					$co++;
				}
			
					echo'<tr>
							<td colspan="6" style="text-align: right;"><b>Total</b></td>
							<td colspan="2" style="text-align: left;"><b><i class="fa fa-rupee"></i>'.$total.'</b></td>
						</tr>';
			echo'</table>';
		}
		else{
			echo '<center><h4>Your Cart Is Empty</h4></center>';
			$empty = true;
		}
		
		if(! isset($empty))
		{
			echo '<input type="submit" value="Update Cart" style="margin-top:10px; 
				background-color:#00e58b; color:#000; font-weight:bold; border-radius:5px;">';

			echo '<center><a href="order.php?rate='.$rate.'&discount='.$dis.'&total='.$total.'"class="btn btn-success" style="margin-top:6px" >Order Now</a><center>';
		}

	?>	
	</form>
<?php
	//include('include/footer.php');
?>