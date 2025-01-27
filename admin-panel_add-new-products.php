<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
  <title>Add New Product</title>
  <?php require_once 'admin-nav.php'; ?>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    /* Styles specific to the add-product form */
    .add-product-container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      box-sizing: border-box;
    }

    .add-product-container h1 {
      text-align: center;
      color: #333;
    }

    .add-product-container form {
      margin-top: 30px;
    }

    .add-product-container label {
      font-weight: bold;
      color: #555;
    }

    .add-product-container input[type="text"],
    .add-product-container input[type="number"],
    .add-product-container textarea,
    .add-product-container select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .add-product-container input[type="file"] {
      margin-top: 5px;
    }

    .add-product-container select {
      height: 40px;
    }

    .add-product-container textarea {
      height: 100px;
    }

    .add-product-container input[type="submit"] {
      background-color: hsl(148, 20%, 38%);
      color: white;
      padding: 14px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      margin-top: 20px;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .add-product-container input[type="submit"]:hover {
      background-color: hsl(149, 14%, 50%);
    }

    @media (max-width: 768px) {
      .add-product-container {
        max-width: 300px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="add-product-container">
  <h1>Add New Product</h1>
  <?php
  // Include your database connection file
  include('db_connection.php');

  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve product details from the form
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_description = $_POST['product_description'];
      $product_type = $_POST['product_type'];

      // Upload product image
      $target_dir = "assets/images/";
      $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      $check = getimagesize($_FILES["product_image"]["tmp_name"]);
      if($check !== false) {
          // Check if file already exists
          if (file_exists($target_file)) {
              echo "Sorry, file already exists.";
          } else {
              // Check file size
              if ($_FILES["product_image"]["size"] > 500000) {
                  echo "Sorry, your file is too large.";
              } else {
                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif" ) {
                      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  } else {
                      // Move uploaded file to the target directory
                      if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                          // Insert product data into the database
                          $insert_product_query = "INSERT INTO products (product_name, product_price, description, image, product_type) 
                                                  VALUES ('$product_name', '$product_price', '$product_description', '".basename($_FILES["product_image"]["name"])."', '$product_type')";

                          if ($conn->query($insert_product_query) === TRUE) {
                              echo "New product added successfully.";
                          } else {
                              echo "Error: " . $insert_product_query . "<br>" . $conn->error;
                          }
                      } else {
                          echo "Sorry, there was an error uploading your file.";
                      }
                  }
              }
          }
      } else {
          echo "File is not an image.";
      }
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <label for="product_name">Product Name:</label><br>
    <input type="text" id="product_name" name="product_name" required><br><br>

    <label for="product_price">Price:</label><br>
    <input type="number" id="product_price" name="product_price" min="0" step="0.01" required><br><br>

    <label for="product_description">Description:</label><br>
    <textarea id="product_description" name="product_description" rows="4" required></textarea><br><br>

    <label for="product_image">Product Image:</label><br>
    <input type="file" id="product_image" name="product_image" accept="image/*" required><br><br>

    <label for="product_type">Product Type:</label><br>
    <select id="product_type" name="product_type" required>
      <option value="chicken">Chicken</option>
      <option value="plants">Nursery Plants</option>
      <option value="fertilizer">Bio Organic Fertilizer</option>
    </select><br><br>

    <input type="submit" value="Add Product">
  </form>
  </div>
</body>
</html>
