<?php
	include('include/header.php');
	include("include/config.php");

	$uid = $_SESSION['client']['uid'];
	$res = mysqli_query($link,"select * from orders where o_uid=$uid order by o_id desc");
?>

<div class="top-products">
	<div class="container">
		<h3>Your Orders</h3>
		
		<form action="addtocart.php" method="post">
		<table class="mycart" cellspacing="0">
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Qty</th>
				<th>Total</th>
				<th>Date</th>
				<th>Cancel Order</th>
			</tr>
			
			<?php
				$co = 1;
				while($row = mysqli_fetch_array($res))
				{
					$pq = "select * from product_add where p_id = '".$row['o_clothes']."' ";
					$pres = mysqli_query($link,$pq);
					$prow = mysqli_fetch_assoc($pres);
					//$dis = ($prow['p_price'] - $prow['discount']) / 100; 
					//$fp = $prow['p_price'] - $dis;
					$rate = ($row['o_qty']) * ($prow['p_price']);
					echo '<tr>
							<td>'.$co.'
							<td>'.$prow['p_nm'].'
							<td><img src="upload/'.$prow['p_img'].'" style="width:40px"; />
							<td><i class="fa fa-rupee"></i>'.$prow['p_price'].'
							<td>'.$row['o_qty'].'
							<td><i class="fa fa-rupee"></i>'.$rate.'
							<td>'.date('d-m-Y',$row['o_time']).'
							<td><a href="order_cancel.php?id='.$row['o_id'].'" class="btn btn-danger">Cancel Order</a>
						</tr>';
						
					$co++;
				}
			
			echo'</table>';

			?>
		
	</form>
