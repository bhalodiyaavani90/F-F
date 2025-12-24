<?php
        include("include/header.php");
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Category List</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Add Category</span></li>
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
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                                    $cat_q = "select * from category";

                                                    $cat_res = mysqli_query($link,$cat_q);

                                                    while($cat_row = mysqli_fetch_assoc($cat_res))
                                                    {
                                                        echo '<tr>';
                                                        echo '<td>'.$cat_row['cat_id'].'</td>';
                                                        echo '<td>'.$cat_row['cat_nm'].'</td>';
                                                        echo '<td>'.date('d-m-Y',$cat_row['cat_time']).'</td>';
                                                        echo '<td>
                                                                <a href="category_edit.php?id='.$cat_row['cat_id'].'"
                                                                 class="btn btn-success btn-xs">Edit</a>
                                                                <a href="category_delete.php?id='.$cat_row['cat_id'].'" class="btn btn-danger btn-xs"
                                                                onclick="return confirm(\'Do you have really Delete this item?\');">Delete</a>
                                                            </td>';
                                                        echo '</tr>';
                                                    }
                                                
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
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