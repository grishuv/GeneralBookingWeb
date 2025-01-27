<?php
// Include the database connection file
require_once 'db_connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $queries = $_POST['queries'];
    $email_address = $_POST['email_address'];

    // Sanitize and validate data (you may need more validation depending on your requirements)
    $queries = mysqli_real_escape_string($conn, $queries);
    $email_address = mysqli_real_escape_string($conn, $email_address);

    // Prepare and execute SQL query to insert data into the database
    $sql = "INSERT INTO inquiries (queries, email) VALUES ('$queries', '$email_address')";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the same page
        header("Location: index.php");
        exit(); // Make sure to stop the script execution after redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
