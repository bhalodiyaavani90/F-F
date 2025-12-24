<?php 
	session_start();

	session_destroy();

	header("location:login.php");
	//already there      header("location:index.php");
 ?>