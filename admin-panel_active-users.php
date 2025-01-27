<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>User Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header h1{
            margin-left:85px;
            color:#333;
            padding: 10px;
        }

        .header p{
            margin-left: 85px;
            padding: 10px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .user-card {
            width: calc(33.33% - 20px);
            margin: 10px;
            padding: 20px;
            background-color:  hsla(145, 35%, 28%, 0.215);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .user-info {
            margin-bottom: 20px;
        }

        .user-info h2 {
            margin-bottom: 5px;
            color: #333;
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        .user-info p {
            margin: 0;
            color: #666;
            font-size: 1.2rem;
        }

        .user-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-actions a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .user-actions a:hover {
            background-color: #666;
        }

        @media screen and (max-width: 768px) {
            .header h1{
            margin-left:15px;
        }

        .header p{
            margin-left: 15px;
        }

            .container {
            max-width: 300px;
            }

            .user-card {
                width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 480px) {
            .header h1{
            margin-left:15px;
        }

        .header p{
            margin-left: 15px;
        }

            .container {
            max-width: 300px;
            }

            .user-card {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
<?php require_once 'admin-nav.php'; ?>

<div class="header">
 <h1>User Details</h1>
        <p>This page displays details of all registered users.</p>
</div>
    <div class="container">
        <?php
        // Include your database connection file
        include('db_connection.php');

        // Function to delete user by ID
        function deleteUser($conn, $userId) {
            $sql = "DELETE FROM users WHERE id = $userId";
            if ($conn->query($sql) === TRUE) {
                echo "<div>User deleted successfully.</div>";
            } else {
                echo "<div>Error deleting user: " . $conn->error . "</div>";
            }
        }

        // Check if edit or delete action is triggered
        if(isset($_GET['action']) && isset($_GET['id'])) {
            $action = $_GET['action'];
            $userId = $_GET['id'];

            // Perform corresponding action
            if($action === 'delete') {
                deleteUser($conn, $userId);
            }
        }

        // Query to retrieve user details
        $query = "SELECT id, username, name, phone, created_at FROM users";
        $result = $conn->query($query);

        // Check if there are any users
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='user-card'>
                        <div class='user-info'>
                            <h2>ID: ".$row["id"]."</h2>
                            <p>Username: ".$row["username"]."</p>
                            <p>Name: ".$row["name"]."</p>
                            <p>Phone: ".$row["phone"]."</p>
                            <p>Created At: ".$row["created_at"]."</p>
                        </div>
                        <div class='user-actions'>
                            <a href='edit_user.php?id=".$row["id"]."' style='background-color: rgb(116, 155, 117);'>Edit</a>
                            <a href='?action=delete&id=".$row["id"]."' style='background-color: #ed3b3b;'>Delete acc</a>
                        </div>
                    </div>";
            }
        } else {
            echo "No users found.";
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>
</body>
</html>