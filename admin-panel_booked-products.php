<?php
// Include your database connection file
include('db_connection.php');

// Query to fetch booking information
$booking_query = "SELECT purchases.*, products.product_name, users.username 
                  FROM purchases 
                  INNER JOIN products ON purchases.product_id = products.product_id
                  INNER JOIN users ON purchases.user_id = users.id
                  ORDER BY purchasing_date DESC"; // You can adjust the query as per your database schema

// Execute the query
$booking_result = $conn->query($booking_query);
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
    <title>Admin Bookings</title>
    <style>

        .booking body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        
        .booking-card-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }
        .booking-card-container .booking-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            width: 300px; 
            cursor: pointer;
        }
        .booking-card-container .booking-card:hover {
            transform: translateY(-5px);
        }
        .booking-card-container .booking-card:hover .booking-details {
            background-color: hsla(145, 35%, 28%, 0.215);
        }
        .booking-card-container .booking-details {
            padding: 20px;
            transition: background-color 0.3s ease-in-out;
        }
        .booking-card-container .booking-details p {
            margin: 5px 0;
        }
        .booking-card-container .booking-details strong {
            font-weight: bold;
        }
        .booking-card-container .booking-card h3 {
            margin-top: 0;
            background-color: hsl(148, 20%, 38%);
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        @media (max-width: 768px) {
      .booking-card-container {
        max-width: 300px;
        padding: 20px;
      }
    }
    </style>
</head>
<body class="booking">
    <h2 style="text-align: left; margin-left: 85px;  padding: 10px;">Admin Bookings</h2>
    <div class="booking-card-container">
        <?php
        // Loop through booking results and display each booking as a card
        if ($booking_result->num_rows > 0) {
            while ($row = $booking_result->fetch_assoc()) {
                ?>
                <div class="booking-card">
                    <h3>Booking ID: <?php echo $row['purchase_id']; ?></h3>
                    <div class="booking-details">
                        <p><strong>User:</strong> <?php echo $row['username']; ?></p>
                        <p><strong>Product Name:</strong> <?php echo $row['product_name']; ?></p>
                        <p><strong>Quantity:</strong> <?php echo $row['quantity']; ?></p>
                        <p><strong>Total Amount:</strong> $<?php echo $row['total_amount']; ?></p>
                        <p><strong>Payment Method:</strong> <?php echo $row['payment_method']; ?></p>
                        <p><strong>Booking Date:</strong> <?php echo $row['purchasing_date']; ?></p>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No bookings found</p>";
        }
        ?>
    </div>
</body>
</html>
