<?php
include('include/db.php'); // or wherever your DB connection is

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $user_name = mysqli_real_escape_string($link, $_POST['user_name']);
    $rating = intval($_POST['rating']);
    $review_text = mysqli_real_escape_string($link, $_POST['review_text']);

    $insert = "INSERT INTO reviews (product_id, user_name, rating, review_text) 
               VALUES ($product_id, '$user_name', $rating, '$review_text')";

    mysqli_query($link, $insert);
    header("Location: product.php?id=$product_id");
}
?>


<form action="submit_review.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $cid; ?>">
    <input type="text" name="user_name" placeholder="Your Name" required>
    <select name="rating" required>
        <option value="">Rate the product</option>
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?> Star</option>
        <?php } ?>
    </select>
    <textarea name="review_text" placeholder="Write your review" required></textarea>
    <button type="submit">Submit Review</button>
</form>
