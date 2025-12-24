<?php
// Start session and include database connection
session_start();
include("include/config.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $user_name = $_POST['user_name'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // Validate inputs (optional, but recommended)
    if (!empty($product_id) && !empty($user_name) && !empty($rating) && !empty($review)) {
        $query = "INSERT INTO reviews (product_id, user_name, rating, review_text, created_at)
                  VALUES ('$product_id', '$user_name', '$rating', '$review', NOW())";

        $result = mysqli_query($link, $query);

        if ($result) {
          echo '
<div style="
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
">
    <div style="
        background: linear-gradient(135deg, #67829aff, #44ef44ff);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(185, 120, 120, 0.86);
        text-align: center;
        max-width: 400px;
        font-family: Georgia, serif;
    ">
        <h2 style="color: #111111ff; margin-bottom: 20px; font-style: italic;">🎉 Review Added Successfully!</h2>
        <a href="index.php">
            <button style="
                padding: 12px 25px;
                background-color: #1c1d1cff;
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
                transition: 0.3s;
            " onmouseover="this.style.backgroundColor=\'#37f602ff\'" onmouseout="this.style.backgroundColor=\'#000000ff\'">
                Go to Home Page
            </button>  </a>
    </div>
</div>';
                // header("Location: clothes_single.php?id=$product_id&review=success");
        exit();
        } else {
            echo "<p style='color:red;'>Error adding review.</p>";
        }
    } else {
        echo "<p style='color:red;'>Please fill in all fields.</p>";
    }
}
?>

<!-- HTML form for adding a review -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a Review</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .review-box {
            background-color: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .review-box p {
            margin: 15px 0 10px;
            font-weight: 600;
            color: #444;
        }

        .review-box input[type="text"],
        .review-box input[type="number"],
        .review-box textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }

        .review-box textarea {
            resize: vertical;
            min-height: 100px;
        }

        .review-box button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .review-box button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="review-box">
        <h2>Add a Review</h2>
        <form action="addreview.php" method="post">
            <input type="hidden" name="product_id" value="123"> <!-- Replace with dynamic product ID -->
            <p>Your Name:</p>
            <input type="text" name="user_name" required>

            <p>Rating (1-5):</p>
            <input type="number" name="rating" min="1" max="5" required>

            <p>Your Review:</p>
            <textarea name="review" rows="5" required></textarea>

            <button type="submit">Submit Review</button>
        </form>
    </div>

</body>
</html>
