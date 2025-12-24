
<?php
	include('include/header.php');
		//extract($_SESSION['register']);	
?>
	
	<div class="login">
	
		<div class="main-agileits"  style="background-color: #e4bbbbd8;  box-shadow: 0 0 15px rgba(0,0,0,0.2);">
				<div class="form-w3agile">
					<h3  style="font-weight: bold;font-family: Georgia, serif; font-style: italic;">Register</h3>

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

					<form action="register_process.php" method="post">
					    <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="fnm"  placeholder="Full Name" value="<?php echo $fnm; ?>">
							<div class="clearfix"></div>
						</div>
								<?php
									
									if(isset($_SESSION['error']['fnm']))
									{
										echo '<p class="er-style">'.$_SESSION['error']['fnm'].'</p>';
									}
									
								?>

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="unm"  placeholder="Username" value="<?php echo $unm; ?>">
							<div class="clearfix"></div>
						</div>
								<?php
									/*
									if(isset($_SESSION['error']['unm']))
									{
										echo '<p class="er-style">'.$_SESSION['error']['unm'].'</p>';
									}
									*/
								?>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="email" placeholder="Email" value="<?php echo $email; ?>">
							<div class="clearfix"></div>
						</div>	
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password"  name="pwd" placeholder="Password">
							<div class="clearfix"></div>
						</div>
								<?php
									/*
									if(isset($_SESSION['error']['pwd']))
									{
										echo '<p class="er-style">'.$_SESSION['error']['pwd'].'</p>';
									}
									*/
								?>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="cpwd" placeholder="Confirm Password">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text"  name="cno"  placeholder="Contact No" value="<?php echo $cno; ?>">
							<div class="clearfix"></div>
						</div>
								<?php
									/*
									if(isset($_SESSION['error']['cno']))
									{
										echo '<p class="er-style">'.$_SESSION['error']['cno'].'</p>';
									}
									*/
								?>
						<input type="submit" style="display: block; margin: 20px auto;" value="I Accept & Register">
					</form>

						<?php 
							if(isset($_SESSION['done']))
							{
								unset($_SESSION['done']);
							}
							if(isset($_SESSION['error']))
							{
								unset($_SESSION['error']);
								unset($_SESSION['register']);
							}
						?>

				</div>
			</div>
		</div>
<?php
	include('include/footer.php');
?>