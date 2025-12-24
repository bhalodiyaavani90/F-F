<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//echo "Hello, Laravel is running!";
?>

    <?php
            include("include/header.php");

    $sq="select * from orders";
	$res=mysqli_query($link,$sq);
	$total=0;
	while($row=mysqli_fetch_array($res))
	{
		$total=$total+$row['o_rate'];
	}

	$totalOrders =0;
	$orders = mysqli_query($link,"SELECT * FROM orders");
    $totalOrders = mysqli_num_rows($orders);
	
    $clothes = mysqli_query($link,"SELECT * FROM product_add");
    $totalclothes = mysqli_num_rows($clothes);
	
	$user = mysqli_query($link,"SELECT * FROM register");
    $totalUsers = mysqli_num_rows($user);
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">

                
                                <div class="col-xl-3 col-md-6 mb-4" style="margin-top:100px;">
                                    <div class="card border-left-primary shadow h-100 py-2" style="border-radius:7px; 
                                        border-left:0.25rem solid #4e73df !important; border-right:0.25rem solid #4e73df !important;">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Earnings</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-rupee" style="font-size:40px;color:green"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-6 mb-4" style="margin-top:100px;">
                                    <div class="card border-left-success shadow h-100 py-2" style="border-radius:7px; 
                                        border-left:0.25rem solid #1cc88a !important; border-right:0.25rem solid #1cc88a !important;">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Products</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalclothes; ?></div>
                                                </div>
                                                 <div class="col-auto">
                    	                            <i class="fa fa-male" aria-hidden="true" style="font-size:40px;color:blue" ></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-3 col-md-6 mb-4"style="margin-top:100px;">
                                    <div class="card border-left-info shadow h-100 py-2" style="border-radius:7px; 
                                        border-left:0.25rem solid #36b9cc !important; border-right:0.25rem solid #36b9cc !important;">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Orders</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $totalOrders; ?></div>
                                                    </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 
								<?php
								if($totalOrders==0)
								{
									echo "0%";
								}
								elseif($totalOrders<5)
								{
									echo "10%";
								}
								elseif($totalOrders<10)
								{
									echo "20%";
								}
								elseif($totalOrders<20)
								{
									echo "30%";
								}
								elseif($totalOrders<40)
								{
									echo "40%";
								}
								elseif($totalOrders<50)
								{
									echo "50%";
								}
								elseif($totalOrders<60)
								{
									echo "50%";
								}
								elseif($totalOrders<70)
								{
									echo "70%";
								}
								else
								{
									echo"80%";
								}
								?>"aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-book" style="font-size:40px;color:red"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                                <div class="col-xl-3 col-md-6 mb-4" style="margin-top:100px;">
                                    <div class="card border-left-warning shadow h-100 py-2" style="border-radius:7px; 
                                        border-left:0.25rem solid #f6c23e !important; border-right:0.25rem solid #f6c23e !important;">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Users</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalUsers; ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-user"style="font-size:40px;color:#A8EB12"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->

 <?php
        include("include/footer.php");
 ?>      