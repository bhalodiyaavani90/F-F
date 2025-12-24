<?php

		include('include/header.php');
?>


<div class="sub-banner">
</div>

<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>F&F Fashion </h5>
				<h5>India</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>+91 9876543210</h5>
				<h5>+91 8897654321</h5>
			</div>
		
		</div>
		<div class="col-md-9 col-sm-9 contact-right">

		<?php
              if(isset($_SESSION['done']))
        		{
                    echo '<p class="alert alert-success">'.$_SESSION['done'].'</p>';
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
			<form action="contact_process.php" method="post">
				<input type="text" name="fnm" placeholder="Full Name">
				<input type="text" name="mno" placeholder="Mobile No">
				<input type="text" name="email" placeholder="E-Mail">
				<input type="text" name="sub" placeholder="Subject">
				<textarea  name="msg" placeholder="Message" rows=5></textarea>
				<input type="submit" value="Send Me">
			</form>

			<?php
                 unset($_SESSION['done']);
                 unset($_SESSION['error']);
			?>

		</div>
	</div>
</div>



<?php
		include('include/footer.php');
?>