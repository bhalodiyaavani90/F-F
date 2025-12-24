<?php
        include("include/header.php");
        include("../include/config.php");
?>


            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Manage Orders</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>New Orders</span></li>
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

                                <?php
                                    if(isset($_SESSION['del']))
                                    {
                                        echo '<p class="btn btn-success">'.$_SESSION['del'].'</p>';
                                        unset($_SESSION['del']);
                                    }
                                ?>
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                            <tr>
                                                <th>No</th>
                                                <th>User</th>
                                                <th>Product Name</th>
                                                <th>Qty</th>
                                                <th>Rate</th>
                                                <th>Address</th>
                                                <th>Time</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                                    $sq = mysqli_query($link,"select * from orders order by o_id desc");
                                                    $co = 1;

                                                    while($row = mysqli_fetch_assoc($sq))
                                                    {
                                                        $ures = mysqli_query($link,"select * from register where r_id = '".$row['o_uid']."'");
                                                        $urow = mysqli_fetch_assoc($ures);
                                                        $tt = date('d-m-Y',$row['o_time']);

                                                        echo '<tr>';
                                                           echo '<td>'.$co.'</td>';
                                                           
                                                           if(! empty($urow))
                                                           {
                                                               echo '<td>'.$urow['r_fnm'].'</td>';
                                                           }
                                                           else
                                                           {
                                                               echo '<td>User Deleted</td>';
                                                           }
                                                           
                                                            echo '<td>'.$row['o_nm'].'</td>';
                                                            echo '<td>'.$row['o_qty'].'</td>';
                                                            echo '<td>'.$row['o_rate'].'</td>';
                                                            echo '<td>'.$row['o_address'].'</td>';
                                                            echo '<td>'.$tt.'</td>';
                                                            echo '<td><a href="order_delete.php?id='.$row['o_id'].'"
                                                            class="btn btn-danger btn-xs" onclick="return confirm(\'Do you have really Delete this item?\');">Delete</a></td>';
                                                        echo '</tr>';

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