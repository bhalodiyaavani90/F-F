<?php
        include("include/header.php");
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Gallery List</h4>
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
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $q= "select * from gallery";

                                                $res = mysqli_query($link,$q);

                                                $co = 1;

                                                while($row = mysqli_fetch_assoc($res))
                                                {
                                                    echo '<tr>
                                                            <td>'.$co.'</td>
                                                            <td>'.$row['g_title'].'</td>
                                                            <td><img src="../upload/gallery/'.$row['g_img'].'" width="50"></td>
                                                            <td>'.date('d-m-Y',$row['g_time']).'</td>
                                                            <td>
                                                                <a href="gallery_edit.php?id='.$row['g_id'].'" class="btn btn-success btn-xs">Edit</a>
                                                                <a href="gallery_delete.php?id='.$row['g_id'].'" class="btn btn-danger btn-xs"
                                                                onclick="return confirm(\'Do you have really Delete this item?\');">Delete</a>
                                                            </td>
                                                        </tr>';

                                                        $co++;
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