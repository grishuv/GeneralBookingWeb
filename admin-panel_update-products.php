<?php
// Include your database connection file
include('db_connection.php');
?>
  <?php require_once 'admin-nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Product List</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px auto;
}

.product-card {
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
    width: 300px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-info {
    padding: 20px;
}

.product-info img {
    width: 50%;
    height: 50%;
    border-radius: 10px 10px 0 0;
}

.product-id {
    font-size: 12px;
    color: #666;
}

.product-title {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
}

.product-price {
    font-size: 16px;
    font-weight: bold;
    color: #007bff;
}

.product-description {
    font-size: 14px;
    color: #444;
}

.options {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 10px;
    background-color: #eee;
}

.options a {
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    transition: color 0.3s ease;
}

.options a:hover {
    color: #0056b3;
}

    </style>
</head>
<body>

<div class="container">
    <?php
    // Fetch the list of available products from the database
    $product_query = "SELECT * FROM products";
    $product_result = $conn->query($product_query);

    // Check if any products are available
    if ($product_result->num_rows > 0) {
        // Display each product with edit and delete options
        while ($row = $product_result->fetch_assoc()) {
            ?>
            <div class="product-card">
                <!-- Display product details -->
                <div class="product-info">
                    <div class="product-id">Product ID: <?php echo $row['product_id']; ?></div>
                    <div class="product-title"><?php echo $row['product_name']; ?></div>
                    <div class="product-price">$<?php echo $row['product_price']; ?></div>
                    <div class="product-description"><?php echo $row['description']; ?></div>
                    <div class="product-image">
                        <img src="/assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>">
                    </div>
                </div>
                <!-- Edit and delete options -->
                <div class="options">
                    <a href="admin-panel_up-edit.php?id=<?php echo $row['product_id']; ?>">Edit</a>
                    <a href="admin-panel_up-delete.php?id=<?php echo $row['product_id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No products available.";
    }
    ?>
</div>

</body>
</html>
