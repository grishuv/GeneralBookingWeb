<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Delete Product</title>
    <link rel="stylesheet" href="/assets/css/admin-panel_up-delete.css">
    <?php require_once 'admin-nav.php'; ?>
</head>
<body>
<div class="container">
<h1>Delete Product</h1>
<?php
// Include your database connection file
include('db_connection.php');

// Check if product ID is provided in the URL
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch product details from the database based on the provided product ID
    $product_query = "SELECT * FROM products WHERE product_id = $product_id";
    $product_result = $conn->query($product_query);

    if ($product_result->num_rows == 1) {
        $row = $product_result->fetch_assoc();

        // If the form is submitted, delete the product
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Delete the product from the database
            $delete_query = "DELETE FROM products WHERE product_id = $product_id";

            if ($conn->query($delete_query) === TRUE) {
                // Redirect back to the update page
                header("Location: admin-panel_update-products.php");
                exit();
            } else {
                echo "Error deleting product: " . $conn->error;
            }
        }

        // Display confirmation message and delete button
        ?>
        <p>Are you sure you want to delete the following product?</p>
        <p>Product ID: <?php echo $row['product_id']; ?></p>
        <p>Product Name: <?php echo $row['product_name']; ?></p>
        <form action="" method="post">
            <input type="submit" value="Delete Product">
        </form>
        <?php
    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>
</div>
</body>
</html>
