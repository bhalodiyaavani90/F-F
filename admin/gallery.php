<?php
        include("include/header.php");
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add Gallery</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Add Gallery</span></li>
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

                                <form action="gallery_process.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label for="gtitle" class="col-form-label">Title</label>
                                            <input class="form-control" type="text" name="gtitle" id="gtitle">
                                     </div>

                                     <div class="form-group">
                                            <label for="gimg" class="col-form-label">Image</label>
                                            <input class="form-control" type="file" name="gimg" id="gimg">
                                     </div>
										
									<div class="form-group">
                                            <input class="btn btn-success mb-3" type="submit" value="Add Gallery" >
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