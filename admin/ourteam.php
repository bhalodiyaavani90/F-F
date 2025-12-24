<?php
        include("include/header.php");
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Add Our Team</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Add Our Team</span></li>
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

                                <form action="ourteam_process.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label for="ofnm" class="col-form-label">Full Name</label>
                                            <input class="form-control" type="text" name="ofnm" id="ofnm">
                                     </div>

                                     <div class="form-group">
                                            <label for="opost" class="col-form-label">Post</label>
                                            <input class="form-control" type="text" name="opost" id="opost">
                                     </div>

                                     <div class="form-group">
                                            <label for="oflink" class="col-form-label">Facebook Link</label>
                                            <input class="form-control" type="text" name="oflink" id="oflink">
                                     </div>

                                     <div class="form-group">
                                            <label for="otlink" class="col-form-label">Twitter Link</label>
                                            <input class="form-control" type="text" name="otlink" id="otlink">
                                     </div>

                                     <div class="form-group">
                                            <label for="oinlink" class="col-form-label">Linkedin Link</label>
                                            <input class="form-control" type="text" name="oinlink" id="oinlink">
                                     </div>

                                     <div class="form-group">
                                            <label for="oimg" class="col-form-label">Image</label>
                                            <input class="form-control" type="file" name="oimg" id="oimg">
                                     </div>
										
									<div class="form-group">
                                            <input class="btn btn-success mb-3" type="submit" value="Add Our Team" >
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