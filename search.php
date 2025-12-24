<?php
	$product_search = $_GET['search'];
	include('include/header.php');

	$p_q = "SELECT * FROM product_add WHERE p_nm LIKE '%$product_search%'";
	$p_res = mysqli_query($link, $p_q);
?>

<style>
.product-img {
    position: relative;
    overflow: hidden;
    margin-bottom: 20px;
    border: 1px solid #eee;
    border-radius: 5px;
    transition: 0.3s;
}
.product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    aspect-ratio: 1/1; /* ensures square image */
}
.p-mask {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: 0.5s;
}
.product-img:hover .p-mask {
    opacity: 1;
}
.women-grids {
    margin-bottom: 30px;
    text-align: center;
}
.women-grids h4 {
    margin-top: 10px;
    font-size: 16px;
}
.women-grids h5 {
    color: #E91E63;
    font-weight: bold;
}
.yellow-star {
    color: #FFD700;
}
.gray-star {
    color: #ccc;
}
</style>

<div class="col-md-8 col-sm-8 women-dresses">
    <div class="women-set1">
        <h3>Search: <?php echo $product_search ?></h3>
        <hr>
        <div class="row">
            <?php
            if(mysqli_num_rows($p_res) <= 0) {
                echo '<p>No Results Found.</p>';
            } else {
                while($p_row = mysqli_fetch_assoc($p_res)) {
                    echo '
                    <div class="col-md-4 col-sm-6 col-xs-12 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="clothes_single.php?id='.$p_row['p_id'].'">
                            <div class="product-img">
                                <img src="upload/'.$p_row['p_img'].'" alt="'.$p_row['p_nm'].'"/>
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls1_item" value="'.$p_row['p_nm'].'" />
                                        <input type="hidden" name="amount" value="'.$p_row['p_price'].'" />
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </a>
                        <div>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        </div>
                        <h4>'.$p_row['p_nm'].'</h4>
                        <h5><i class="fa fa-rupee"></i> '.$p_row['p_price'].'</h5>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
