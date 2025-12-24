<?php 
        include("include/header.php");

        $pid = $_GET['id'];

        $q = "select * from product_add
            where p_id = $pid";

            $res = mysqli_query($link,$q);

            $row = mysqli_fetch_assoc($res);
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Edit Product</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Edit Product</span></li>
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

                                <form action="product_edit_process.php" method="post" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label for="pnm" class="col-form-label">Product Name</label>
                                            <input class="form-control" type="text" name="pnm" value="<?php echo $row['p_nm']; ?>" id="pnm">
                                     </div>

                                     <div class="form-group">
                                            <label for="cnm" class="col-form-label">Category</label>
                                            <select class="form-control" name="category" id="cnm">
                                            <?php
                                                $cat_q = "select * from category";

                                                $cat_res = mysqli_query($link,$cat_q);

                                                while($cat_row = mysqli_fetch_assoc($cat_res))
                                                {
                                                    if($cat_row['cat_id']==$row['p_cat'])
                                                    {
                                                        echo '<option selected="selected" value="'.$cat_row['cat_id'].'">'.$cat_row
                                                        ['cat_nm'].'</option>';
                                                    }
                                                    else
                                                    {
                                                        echo '<option value="'.$cat_row['cat_id'].'">'.$cat_row['cat_nm'].'</option>';  
                                                    }
                                                }
                                            
                                            ?>
                                            </select>
                                     </div>

                                     <div class="form-group">
                                            <label for="prsn" class="col-form-label">Processing Notes</label>
                                            <textarea class="form-control" name="processing" id="prsn"><?php echo $row['p_process']; ?></textarea>
                                     </div>

                                     <div class="form-group">
                                            <label for="desc" class="col-form-label">Description</label>
                                            <textarea class="form-control" name="desc" id="desc"><?php echo $row['p_desc']; ?></textarea>
                                     </div>

                                     <div class="form-group">
                                            <label for="price" class="col-form-label">Price</label>
                                            <input class="form-control" type="number" name="price" value="<?php echo $row['p_price']; ?>" id="price">
                                     </div>

                                     <div class="form-group">
                                            <label for="dis" class="col-form-label">Discount</label>
                                            <input class="form-control" type="text" name="discount" value="<?php echo $row['p_discount']; ?>" id="dis">
                                     </div>

                                     <div class="form-group">
                                            <label for="img" class="col-form-label">Image</label>
                                            <input class="form-control" type="file" name="img" id="img">
                                            <img src="../upload/<?php echo $row['p_img']; ?>" width="80" style="margin-top:10px;"/>
                                     </div>

                                     <div class="form-group">
                                            <label for="fdesc" class="col-form-label">Full Description</label>
                                            <textarea class="form-control" name="fdesc" id="fdesc"><?php echo $row['p_fdesc']; ?></textarea>
                                     </div>

                                     <div class="form-group">
                                            <label for="addinfo" class="col-form-label">Additional Information</label>
                                            <textarea class="form-control" name="addinfo" id="addinfo"><?php echo $row['p_addinfo']; ?></textarea>
                                     </div>
										
                                    
                                    <input type="hidden" name="pid" value="<?php echo $row['p_id']; ?>">

									<div class="form-group">
                                            <input class="btn btn-success mb-3" type="submit" value="Update Product" >
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