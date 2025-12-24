<?php
        include("include/header.php");

        $abid = $_GET['id'];

        $q = "select * from ourteams
            where ab_id = $abid";

            $res = mysqli_query($link,$q);

            $row = mysqli_fetch_assoc($res);
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Edit Our Team</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Edit Our Team</span></li>
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

                                <form action="ourteam_edit_process.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label for="ofnm" class="col-form-label">Full Name</label>
                                            <input class="form-control" type="text" name="ofnm" value="<?php echo $row['ab_fnm']; ?>" id="ofnm">
                                     </div>

                                     <div class="form-group">
                                            <label for="opost" class="col-form-label">Post</label>
                                            <input class="form-control" type="text" name="opost" value="<?php echo $row['ab_post']; ?>" id="opost">
                                     </div>

                                     <div class="form-group">
                                            <label for="oflink" class="col-form-label">Facebook Link</label>
                                            <input class="form-control" type="text" name="oflink" value="<?php echo $row['ab_flink']; ?>" id="oflink">
                                     </div>

                                     <div class="form-group">
                                            <label for="otlink" class="col-form-label">Twitter Link</label>
                                            <input class="form-control" type="text" name="otlink" value="<?php echo $row['ab_tlink']; ?>" id="otlink">
                                     </div>

                                     <div class="form-group">
                                            <label for="oinlink" class="col-form-label">Linkedin Link</label>
                                            <input class="form-control" type="text" name="oinlink" value="<?php echo $row['ab_inlink']; ?>" id="oinlink">
                                     </div>

                                     <div class="form-group">
                                            <label for="oimg" class="col-form-label">Image</label>
                                            <input class="form-control" type="file" name="oimg" id="oimg">
                                            <img src="../upload/ourteam/<?php echo $row['ab_img']; ?>" width="80" style="margin-top:10px;"/>
                                     </div>
										
                                     <input type="hidden" name="abid" value="<?php echo $row['ab_id']; ?>">

									<div class="form-group">
                                            <input class="btn btn-success mb-3" type="submit" value="Update Our Team" >
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