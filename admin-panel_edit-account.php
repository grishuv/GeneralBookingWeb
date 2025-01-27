<?php require_once 'admin-nav.php'; ?>
<?php
// Include your database connection file
include('db_connection.php');
session_start();

// Fetch admin data
$adminDataQuery = "SELECT * FROM users WHERE is_admin = 1";
$adminDataResult = $conn->query($adminDataQuery);
$adminData = $adminDataResult->fetch_assoc();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submission and update the database
    $username = $_POST['username'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; // New password field

    // Use prepared statements to prevent SQL injection
    $updateQuery = "UPDATE users SET username = ?, name = ?, phone = ?, password = ? WHERE is_admin = 1";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("ssss", $username, $name, $phone, $password);

    if ($stmt->execute()) {
        // Redirect to the admin profile page after successful update
        header("Location: admin-panel_edit-account.php");
        exit();
    } else {
        $error_message = "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Edit Admin Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        /* Shared styles outside of the encapsulated container */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Encapsulated styles within the .admin-container class */
        .admin-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .admin-form {
            max-width: 600px;
            width: 100%;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .admin-form:hover {
            transform: translateY(-5px);
        }

        .admin-title {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .admin-form form {
            display: grid;
            grid-row-gap: 20px;
        }

        .admin-label {
            font-weight: bold;
            color: #666;
        }

        .admin-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
        }

        .admin-input:focus {
            outline: none;
            border-color:  hsl(148, 20%, 38%);
        }

        .admin-button {
            width: 100%;
            padding: 12px;
            background-color:  hsl(148, 20%, 38%);
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .admin-button:hover {
            background-color: hsl(149, 14%, 50%);
        }

        .admin-error-message {
            color: red;
            margin-top: 10px;
        }

                /* Responsive styles */
                @media only screen and (max-width: 600px) {
                    .admin-container {
                height: 70vh;
            }
            .admin-form {
                max-width: 300px;
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <div class="admin-form">
            <h1 class="admin-title">Edit Admin Profile</h1>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label class="admin-label" for="username">Username:</label>
                <input class="admin-input" type="text" id="username" name="username" value="<?php echo htmlspecialchars($adminData['username']); ?>" required>

                <label class="admin-label" for="name">Name:</label>
                <input class="admin-input" type="text" id="name" name="name" value="<?php echo htmlspecialchars($adminData['name']); ?>" required>

                <label class="admin-label" for="phone">Phone:</label>
                <input class="admin-input" type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($adminData['phone']); ?>" required>

                <!-- New password field -->
                <label class="admin-label" for="password">New Password:</label>
                <input class="admin-input" type="password" id="password" name="password" required>

                <!-- Add more fields as needed -->

                <?php if (isset($error_message)): ?>
                    <p class="admin-error-message"><?php echo $error_message; ?></p>
                <?php endif; ?>

                <button class="admin-button" type="submit" name="submit">Save Changes</button>
            </form>
        </div>
    </div>
</body>
</html>


