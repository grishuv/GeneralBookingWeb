<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Booking History</title>
    <link rel="stylesheet" href="/assets/css/booking-history.css">
</head>
<body>
<?php require_once 'booking-nav.php'; ?>
    <div class="container">
        <h1>Booking History</h1>
        <div class="booking-cards">
            <?php
            include('db_connection.php');
            session_start();
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
                $query = "SELECT p.*, pr.product_name, pr.product_price, pr.image FROM purchases p INNER JOIN products pr ON p.product_id = pr.product_id WHERE p.user_id = '$user_id'";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="booking-card">
                            <div class="booking-image">
                                <img src="assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>">
                            </div>
                            <div class="booking-details">
                                <h2><?php echo $row['product_name']; ?></h2>
                                <p>Date: <?php echo $row['purchasing_date']; ?></p>
                                <p>Price: $<?php echo $row['product_price']; ?></p>
                                <p>Quantity: <?php echo $row['quantity']; ?></p>
                                <p>Total: $<?php echo $row['total_amount']; ?></p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No bookings found.</p>";
                }
            } else {
                echo "<p>Please sign in to view your booking history.</p>";
            }
            ?>
        </div>
        <a href="booking.php" class="btn">Book More Products</a>
    </div>
</body>
</html>
