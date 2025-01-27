<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
    <title>Payment Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 80%; /* Adjust as needed */
            width: 400px; /* Fallback for older browsers */
            width: 100%; /* Responsive width */
        }

        .checkmark-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .checkmark {
            width: 80px;
            height: 80px;
            fill: none;
            stroke-width: 4px;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke: #4CAF50;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: drawCheck 1s ease-in-out forwards;
        }

        @keyframes drawCheck {
            0% {
                stroke-dashoffset: 100;
            }
            100% {
                stroke-dashoffset: 0;
            }
        }

        .checkmark-text {
            font-size: 24px;
            color: #333;
            margin-top: 20px;
        }

        .redirect-message {
            font-size: 16px;
            color: #666;
            margin-top: 10px;
        }

        .checkmark {
            width: 100px;
            height: 100px;
            stroke-width: 6px;
            stroke-dasharray: 200;
            stroke-dashoffset: 200;
            animation: drawCheck 1s ease-in-out forwards;
        }

        .checkmark__circle {
            stroke: hsl(149, 14%, 50%); 
        }

        .checkmark__check {
            stroke: hsl(149, 14%, 50%); 
        }

        @keyframes drawCheck {
            0% {
                stroke-dashoffset: 200;
            }
            100% {
                stroke-dashoffset: 0;
            }
        }

        /* Media Query for smaller screens */
        @media screen and (max-width: 600px) {
            .container {
                padding: 20px;
            }
            .checkmark {
                width: 60px;
                height: 60px;
            }
            .checkmark-text {
                font-size: 20px;
            }
            .redirect-message {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="checkmark-container">
        <svg class="checkmark checkmark-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <circle class="checkmark__circle" cx="50" cy="50" r="40" fill="none" stroke-width="6"/>
            <path class="checkmark__check" fill="none" d="M31.52 50.49l12.32 12.51L67.71 36"/>
        </svg>
        <div class="checkmark-text">Order Successful!</div>
    </div>
    <p class="redirect-message">You will be redirected back to the booking page shortly.</p>
</div>

<script>
    // Redirect back to booking page after 3 seconds
    setTimeout(function() {
        window.location.href = 'booking.php';
    }, 3000);
</script>
</body>
</html>
