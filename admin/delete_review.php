<?php
include('include/connection.php'); // Adjust path if needed

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure the ID is an integer

    // Prepare and execute the delete query
    $query = "DELETE FROM product_reviews WHERE id = $id";
    $result = mysqli_query($link, $query);

    if ($result) {
        echo "<script>alert('Review deleted successfully.'); window.location.href='reviews_admin.php';</script>";
    } else {
        echo "<script>alert('Error deleting review.'); window.location.href='reviews_admin.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href='reviews_admin.php';</script>";
}
?>
