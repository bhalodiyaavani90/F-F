<?php
		session_start();
		
		if(!isset($_SESSION['client']['status']))
		{
			header("location:login.php");
			exit();
		}
		
		if(isset($_GET['nm']))
		{
			$_SESSION['cart'][]= array("nm"=>$_GET['nm'],"pid"=>$_GET['id'],"price"=>$_GET['price'],"discount"=>$_GET['discount'],
			"img"=>$_GET['img'],"qty"=>1);
		}

		else if(! empty($_POST))
		{
			foreach($_POST as $id=>$val)
			{
				$_SESSION['cart'][$id]['qty'] = $val;
			}
		}
		
		else if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			unset($_SESSION['cart'][$id]);
		}
		header("location:cart.php");


?>