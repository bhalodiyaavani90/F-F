<?php
        include("include/header.php");

        $catid = $_GET['id'];

        $q = "select * from category
            where cat_id = $catid";

            $cat_res = mysqli_query($link,$q);

            $cat_row = mysqli_fetch_assoc($cat_res);
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Edit Category</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Edit Category</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">

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
                                    }
                                
                                ?>

                                <form action="category_edit_process.php" method="post">
                                     <div class="form-group">
                                            <label for="cnm" class="col-form-label">Category Name</label>
                                            <input class="form-control" type="text" name="cnm" value="<?php echo $cat_row['cat_nm']; ?>" id="cnm">
                                     </div>
										
                                     <input type="hidden" name="catid" value="<?php echo $cat_row['cat_id']; ?>">

									<div class="form-group">
                                            <input class="btn btn-success mb-3" type="submit" value="Update Category" >
                                    </div>
                                <form>

                                <?php
                                     unset($_SESSION['done']);
                                     unset($_SESSION['error']);
						        ?>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                   
                </div>
            </div>
        </div>
        <!-- main content area end -->

 <?php
        include("include/footer.php");
 ?>      