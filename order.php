<?php
		include('include/header.php');
		include('include/config.php');

		if(empty($_GET))
		{
			header("location:cart.php");
		}

		$id = $_SESSION['client']['uid'];
		$res = mysqli_query($link,"select * from register where r_id=$id");
		$row = mysqli_fetch_assoc($res);
		$ttl = $_GET['total'];
		$rate = $_GET['rate'];
?>
	
	<div class="login">
	
		<div class="main-agileits"  style="background-color: #e4bbbbd8;  box-shadow: 0 0 15px rgba(0,0,0,0.2);">
				<div class="form-w3agile">
					<h3  style="font-weight: bold;font-family: Georgia, serif; font-style: italic;">Order Now</h3>

					<?php
						if(isset($_SESSION['done']))
						{
							echo '<p class="done-style">'.$_SESSION['done'].'</P>';
						}

						else if(! empty($_SESSION['error']))
						{
							foreach($_SESSION['error'] as $er)
							{
								echo '<p class="alert alert-danger">'.$er.'</p>';
							}	

							echo '<br />';
						}
					?>

					<form action="order_process.php" method="post">
					    <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="fnm"  placeholder="Full Name" value="<?php echo $row['r_fnm']; ?>" required="">
							<div class="clearfix"></div>
						</div>
								
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="unm"  placeholder="Username" value="<?php echo $row['r_unm']; ?>" required="" readonly>
							<div class="clearfix"></div>
						</div>
								
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="email" placeholder="Email" value="<?php echo $row['r_email']; ?>" required="">
							<div class="clearfix"></div>
						</div>	
						
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text"  name="cno"  placeholder="Contact No" value="<?php echo $row['r_mno']; ?>" required="">
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" name="pin" placeholder="Pin Code" value="360001" required="" readonly>
							<div class="clearfix"></div>
						</div>

							<textarea name="address" placeholder="Add Your Address" required="" style="margin-bottom:20px;"></textarea>
							<div class="clearfix"></div>
						
						<div class="key">
							<i class="fa fa-rupee" aria-hidden="true"></i>
							<input  type="text" name="total" placeholder="Total Amount" value="<?php echo $ttl;?>" required="" readonly>
							<div class="clearfix"></div>
						</div>

							<select name="payment" required="" readonly style="padding:12px;">
								<option>Cash On Delivery</option>
								<option>Credit Card</option>
								<option>Debit Card</option>
							</select>
							<div class="clearfix"></div>

						<input type="hidden" name="uid" value="<?php echo $row['r_id']; ?>">
						<input type="hidden" name="rate" valye="<?php echo $rate; ?>">

						<input type="submit" value="Place Order" style="margin-top:15px;">
						<a href="index.php" class="btn btn-info">Cancel</a>
					</form>

						<?php 
							if(isset($_SESSION['done']))
							{
								unset($_SESSION['done']);
							}
							if(isset($_SESSION['error']))
							{
								unset($_SESSION['error']);
							}
						?>

				</div>
			</div>
		</div>
<?php
		include('include/footer.php');
?>