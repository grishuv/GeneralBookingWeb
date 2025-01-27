<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Update Product</title>
    <link rel="stylesheet" href="/assets/css/admin-panel_up-edit.css">
    <?php require_once 'admin-nav.php'; ?>
</head>
<body>
<div class="form-container">
<h2>Update Product</h2> 
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

        // If the form is submitted, update the product details
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the updated product details from the form
            $updated_product_name = $_POST['product_name'];
            $updated_product_price = $_POST['product_price'];
            $updated_description = $_POST['description'];
            $updated_product_type = $_POST['product_type'];

            // Check if an image file is uploaded
            if(isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                // Get the uploaded image details
                $file_name = $_FILES['image']['name'];
                $file_tmp = $_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $file_error = $_FILES['image']['error'];

                // Handle the uploaded image file as needed
                // For example, move it to a specific directory
                move_uploaded_file($file_tmp, "assets/images/" . $file_name);

                // Use $file_name as the updated image path in the database
                $updated_image = $file_name;
            } else {
                // If no image is uploaded, retain the current image path
                $updated_image = $row['image'];
            }

            // Update the product details in the database
            $update_query = "UPDATE products SET 
                             product_name = '$updated_product_name', 
                             product_price = '$updated_product_price', 
                             description = '$updated_description', 
                             image = '$updated_image', 
                             product_type = '$updated_product_type' 
                             WHERE product_id = $product_id";

            if ($conn->query($update_query) === TRUE) {
                // Redirect back to the update page
                header("Location: admin-panel_update-products.php");
                exit();
            } else {
                echo "Error updating product: " . $conn->error;
            }
        }

        // Display the edit form with the current product details
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="product_name">Product Name:</label><br>
            <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>"><br>
            <label for="product_price">Product Price:</label><br>
            <input type="text" id="product_price" name="product_price" value="<?php echo $row['product_price']; ?>"><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description"><?php echo $row['description']; ?></textarea><br>
            <label for="image">Choose Image:</label><br>
            <input type="file" id="image" name="image"><br> <!-- File input for choosing image -->
            <label for="product_type">Product Type:</label><br>
            <input type="text" id="product_type" name="product_type" value="<?php echo $row['product_type']; ?>"><br><br>
            <input type="submit" value="Update Product">
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