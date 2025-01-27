<?php
// Include your database connection file
include('db_connection.php');

// Check if user ID is provided in the URL
if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Query to fetch user details by ID
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = $conn->query($query);

    // Check if user exists
    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();

        // Check if the edit form is submitted
        if(isset($_POST['submit'])) {
            // Retrieve form data
            $username = $_POST['username'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];

            // Update user details in the database
            $updateQuery = "UPDATE users SET username='$username', name='$name', phone='$phone' WHERE id=$userId";

            if ($conn->query($updateQuery) === TRUE) {
                echo "<div>User details updated successfully.</div>";
            } else {
                echo "<div>Error updating user details: " . $conn->error . "</div>";
            }
        }
?>
<?php require_once 'admin-nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
<style>
body, input, button, textarea {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #f2f2f2;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

form {
    max-width: 400px;
    margin: 0 auto;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #666;
}

input[type="text"] {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    color: hsl(148, 20%, 38%);
}

input[type="submit"] {
    width: 100%;
    padding: 15px 0;
    background-color: hsl(148, 20%, 38%);
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: hsl(149, 14%, 50%);
}

.error-message {
    color: #f00;
    margin-top: 10px;
    text-align: center;
}

    </style>
     <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
</head>
<body>
    <div class="container">
    <h2>Edit User Details</h2>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $userData['username']; ?>"><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $userData['name']; ?>"><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $userData['phone']; ?>"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>
<?php
    } else {
        echo "<div>User not found.</div>";
    }
} else {
    echo "<div>User ID not provided.</div>";
}

// Close the database connection
$conn->close();
?>
