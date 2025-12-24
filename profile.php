<?php
		include('include/header.php');
?>

	<div class="login">
	
		<div class="main-agileits" style="background-color: #e4bbbbd8;  box-shadow: 0 0 15px rgba(0,0,0,0.2);">
				<div class="form-w3agile">
					<h3  style="font-weight: bold;font-family: Georgia, serif; font-style: italic;">User Profile</h3>
					<?php
					 $id = $_SESSION['client']['uid'];
					 $q="select * from register
					  where r_id ='". $id."'";
					 $res = mysqli_query($link,$q);
					 $row = mysqli_fetch_assoc($res);
					 ?>
					<div style="height:100%;">
						<div style="text-align:center;">
				 			<img src="images/logo/user3.png" style=" border-radius: 50%; height:180px; width:180px; align:center;">
						 </div>
						 <div style="text-align:center">
						 	<b><span class="font-weight-bold" style="font-style: italic;">Full Name :</span> <?php echo $row['r_fnm']; ?></b>  <br><br>
				 			<b><span class="font-weight-bold"style="font-style: italic;">User Name :</span> <?php echo $row['r_unm']; ?></b>  <br><br>
				 			<b><span class="font-weight-bold"style="font-style: italic;">Email :</span> <?php echo $row['r_email']; ?></b>  <br><br>
				 			<b><span class="font-weight-bold"style="font-style: italic;">Mobile :</span> <?php echo $row['r_mno']; ?></b>  <br><br>
						</div>
				 	</div>

				</div>
			</div>
		</div>

<?php
		include('include/footer.php');
?>