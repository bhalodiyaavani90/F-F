<?php
		include('include/header.php');
?>

	<div class="login" >
	
		<div class="main-agileits" style="background-color: #e4bbbbd8;  box-shadow: 0 0 15px rgba(0,0,0,0.2);">
				<div class="form-w3agile" >
					<h3 style="font-weight: bold;font-family: Georgia, serif; font-style: italic;">Login</h3>

					<?php               
              		 if(! empty($_SESSION['error']))
               		{
                  		foreach($_SESSION['error'] as $er)
                    	{
                       		echo '<p class="alert alert-danger">'.$er.'</p>';
						}
	                }
                                
       			   ?>

					<form action="login_process.php" method="post" >
						<div class="key">
						<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" name="unm"  placeholder="User Name" required=""/>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="pwd"  placeholder="Password" required=""/>
							<div class="clearfix"></div>
						</div>
						<input style="display:grid;font-weight: bold; margin:10px auto 0; padding:10px 30px; cursor:pointer; color:Black;" type="submit" value="LOG IN">
						<!-- for login button in center in upper statement 
						style="display:block; margin:20px auto 0; padding:10px 30px; cursor:pointer;background-color:Black;"-->
					</form>
					<?php
						if(isset($_SESSION['error']))
						{
							unset($_SESSION['error']);
						}
					?>
				</div>
				<div class="forg">
					<a href="#" class="forg-left" style="font-weight: bold;font-style: italic; color: rgba(192, 21, 21, 1);">Forgot Password</a>
					<a href="register.php" class="forg-right"  style="font-weight: bold;font-style: italic; color: rgba(192, 21, 21, 1);">New User? Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>

<?php
		include('include/footer.php');
?>