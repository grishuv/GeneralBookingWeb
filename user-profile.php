<?php
// Include your database connection file
include('db_connection.php');

session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to sign-in page if not logged in
    header("Location: sign in-up.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch the user's existing data from the database
$query = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
} else {
    // Handle error if user data not found
    echo "User data not found.";
    exit();
}

// Define variables to store error messages
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    // Perform any necessary validation

    // Update the user's data in the database
    $update_query = "UPDATE users SET username='$username', name='$name', phone='$phone', password='$password' WHERE id='$user_id'";

    if ($conn->query($update_query) === TRUE) {
        // Redirect to profile page
        header("Location: user-profile.php");
        exit();
    } else {
        // Handle the query error if needed
        $error_message = "Error: " . $conn->error;
    }
}
?>
<?php require_once 'booking-nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/user-profile.css">
  <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>User Profile</title>
</head>
<body>
<div class="user-profile-container">
    <h1>User Profile</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $user_data['username']; ?>" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $user_data['name']; ?>" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo $user_data['phone']; ?>" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" minlength="10" required>


        <input type="submit" value="Save Changes">
    </form>
</div>

    <?php if ($error_message): ?>
        <p>Error: <?php echo $error_message; ?></p>
    <?php endif; ?>
</body>
</html>
