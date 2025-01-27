<?php
// Include your database connection file
include('db_connection.php');

session_start();

// Define variables to store error messages
$error_message = "";
$password_error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check which form is submitted (sign-up or sign-in)
    if (isset($_POST["signup"])) {
        // Handle sign-up form
        $username = $_POST["username"];
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Perform any necessary validation

        // Check if the passwords match
        if ($password !== $confirm_password) {
            $error_message = "Passwords do not match. Please enter matching passwords.";
        } else {
            // Check if the email or name already exists in the database
            $check_existing_query = "SELECT * FROM users WHERE username='$username' OR name='$name'";
            $result = $conn->query($check_existing_query);

            if ($result->num_rows > 0) {
                // User with the same email or name already exists
                $error_message = "User with the same username or name already exists. Please choose a different username or name.";
            } else {
                // Insert data into the database
                $query = "INSERT INTO users (username, name, phone, password) VALUES ('$username','$name','$phone', '$password')";

                // Use the established database connection for the query
                if ($conn->query($query) === TRUE) {
                    // Redirect to sign-in form
                    header("Location: sign in-up.php");
                    exit();
                } else {
                    // Handle the query error if needed
                    $error_message = "Error: " . $conn->error;
                }
            }
        }
    } elseif (isset($_POST["signin"])) {
// Handle sign-in form
$username = $_POST["username"];
$password = $_POST["password"];

// Perform any necessary validation

// Check if the user exists in the database
$check_user_query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($check_user_query);

if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();

    // Check if the user is an admin
    if ($user_data['is_admin'] == 1) {
        // User is an admin, redirect to admin dashboard
        header("Location: admin-nav.php");
        exit();
    } else {
        // User is not an admin, redirect to regular user page (id-form.php)
        $_SESSION['user_id'] = $user_data['id'];
        header("Location: booking.php");
        exit();
    }
} else {
    // User does not exist or credentials are incorrect
    $error_message = "Invalid Username or password";
}
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/sign in-up.css" />

 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required />
            </div>
            <input type="submit" value="Sign in" name="signin" class="btn solid" />
          </form>


          <form  class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" name="phone" placeholder="contact no" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" minlength="10" placeholder="Password" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="confirm_password" minlength="10" placeholder="confirm_Password" required />
            </div>
            <input type="submit" class="btn" value="Sign up" name="signup"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Pure organic desi chicken farm maintain with hygiene environment and chemical free feeding. 
              Each and every Bird is healthy and in free range area.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="assets/images/logo3.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account ?</h3>
            <p>
              Pure organic desi chicken farm maintain with hygiene environment and chemical free feeding.
              Each and every Bird is healthy and in free range area.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/images/2.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/sign in-up.js"></script>

    <div class="overlay" id="overlay"></div>
    <?php if ($error_message): ?>
        <div class="error-popup" id="errorPopup">
            <p><?php echo $error_message; ?></p>
            <button onclick="closeErrorPopup()">Close</button>
        </div>
        <script>
            function closeErrorPopup() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('errorPopup').style.display = 'none';
            }

            // Display the overlay and error popup on page load
            window.onload = function() {
                document.getElementById('overlay').style.display = 'block';
                document.getElementById('errorPopup').style.display = 'block';
            }
        </script>
    <?php endif; ?>

    <?php if ($password_error): ?>
        <div class="error-popup" id="passwordErrorPopup">
            <p><?php echo $password_error; ?></p>
            <button onclick="closePasswordErrorPopup()">Close</button>
        </div>
        <script>
            function closePasswordErrorPopup() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('passwordErrorPopup').style.display = 'none';
            }

            // Display the overlay and password error popup on page load
            window.onload = function() {
                document.getElementById('overlay').style.display = 'block';
                document.getElementById('passwordErrorPopup').style.display = 'block';
            }
        </script>
    <?php endif; ?>

  </body>
</html>