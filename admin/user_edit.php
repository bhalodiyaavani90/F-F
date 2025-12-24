<?php
        include("include/header.php");

        $rid = $_GET['id'];

        $q = "select * from register
            where r_id = $rid";

            $res = mysqli_query($link,$q);

            $row = mysqli_fetch_assoc($res);
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Edit User</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Edit User</span></li>
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

                                <form action="user_edit_process.php" method="post">
                                     <div class="form-group">
                                            <label for="fnm" class="col-form-label">Full Name</label>
                                            <input class="form-control" type="text" name="fnm" value="<?php echo $row['r_fnm']; ?>"  id="fnm">
                                     </div>

                                     <div class="form-group">
                                            <label for="unm" class="col-form-label">User Name</label>
                                            <input class="form-control" type="text" name="unm" value="<?php echo $row['r_unm']; ?>"  id="unm">
                                     </div>

                                     <div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input class="form-control" type="text" name="email" value="<?php echo $row['r_email']; ?>" id="email">
                                     </div>

                                     <div class="form-group">
                                            <label for="cno" class="col-form-label">Mobile No</label>
                                            <input class="form-control" type="text" name="cno" value="<?php echo $row['r_mno']; ?>" id="cno">
                                     </div>
										
                                     <input type="hidden" name="rid" value="<?php echo $row['r_id']; ?>">


									<div class="form-group">
                                            <input class="btn btn-success mb-3" type="submit" value="Update User" >
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