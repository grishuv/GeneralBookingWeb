<?php
// Include your database connection file
include('db_connection.php');

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the user is signed in
    if (isset($_SESSION['user_id'])) {
        // Extract the user ID from the session
        $user_id = $_SESSION['user_id'];

        // Extract selected products, total amount, and payment method from the form submission
        $selected_products = json_decode($_POST['selected_products'], true);
        $total_amount = $_POST['total_amount'];
        $payment_method = $_POST['payment_method']; // New variable for payment method

        // Insert the purchase data into the database
        foreach ($selected_products as $product_id => $quantity) {
            $insert_purchase_query = "INSERT INTO purchases (user_id, product_id, quantity, total_amount, payment_method, purchasing_date) VALUES ('$user_id', '$product_id', '$quantity', '$total_amount', '$payment_method', CURDATE())";

            if ($conn->query($insert_purchase_query) !== TRUE) {
                // Handle the query error if needed
                $error_message = "Error: " . $conn->error;
                // You might want to handle the error and provide appropriate feedback to the user
            }
        }

        // Redirect based on the payment method
        if ($payment_method == 'COD') {
            // Redirect to success page
            header("Location: payment-success.php");
            exit();
        } elseif ($payment_method == 'Online') {
            // Redirect to payment link
            header("Location: https://razorpay.me/@desichickenfarmandnurserybioo");
            exit();
        }
    } else {
        // User is not signed in, handle accordingly (redirect to sign-in page or show an error message)
        header("Location: sign in-up.php");
        exit();
    }
}
?>



<!-- Your HTML content -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/booking.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

 <!-- 
    - favicon
  -->
  <link rel="icon" href="favicon.ico" />
</head>
<body>
<?php require_once 'booking-nav.php'; ?>
<!-- Text at the top -->
<div class="top-text">
<h1>Welcome to Desi Chicken Farm and Nursery Bio!</h1>
    <p>Explore our wide range of products including chickens, plants, and fertilizers.</p>
    <p>We offer high-quality products to meet all your farming and gardening needs.</p>
</div><hr>
<!-- Chicken Products Section -->
<div class="product-section">
    <h2>Chicken</h2>
    <p>Pure organic desi chicken farm maintain with hygiene environment and chemical free feeding. Each and every Bird is healthy and in free range area.</p>
    <div class="product-grid">
        <?php
        // Fetch chicken products from the database
        $chicken_query = "SELECT * FROM products WHERE product_type = 'chicken'";
        $chicken_result = $conn->query($chicken_query);

        // Loop through chicken products fetched from the database
        while ($row = $chicken_result->fetch_assoc()) {
            // Display chicken product card
            // Similar to the existing product card structure
            ?>
            <div class="product-card" id="product<?php echo $row['product_id']; ?>">
                <!-- Product details here -->
                <div class="product-image">
                    <img src="/assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>">
                </div>
                <div class="product-info">
                    <div class="product-title"><?php echo $row['product_name']; ?></div>
                    <div class="product-price">₹<?php echo $row['product_price']; ?></div>
                    <div class="product-description"><?php echo $row['description']; ?></div>
                    <div class="quantity-container">
                        <button class="quantity-button" onclick="decreaseQuantity('<?php echo $row['product_id']; ?>')">-</button>
                        <span class="quantity" id="quantity-product<?php echo $row['product_id']; ?>">1</span>
                        <button class="quantity-button" onclick="increaseQuantity('<?php echo $row['product_id']; ?>')">+</button>
                    </div>
                    <button class="add-to-cart-button" onclick="addToCart(<?php echo $row['product_id']; ?>, <?php echo $row['product_price']; ?>)">Add to Cart</button>

                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Plants Products Section -->
<div class="product-section">
    <h2>Nursery Plants</h2>
    <p>A perfect bonsai plants with flowers through out the years. this plants can survive in any season and in any conditions with little care.</p>
    <div class="product-grid">
        <?php
        // Fetch plants products from the database
        $plants_query = "SELECT * FROM products WHERE product_type = 'plants'";
        $plants_result = $conn->query($plants_query);

        // Loop through plants products fetched from the database
        while ($row = $plants_result->fetch_assoc()) {
            // Display plants product card
            // Similar to the existing product card structure
            ?>
            <div class="product-card" id="product<?php echo $row['product_id']; ?>">
                <!-- Product details here -->
                <div class="product-image">
                    <img src="/assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>">
                </div>
                <div class="product-info">
                    <div class="product-title"><?php echo $row['product_name']; ?></div>
                    <div class="product-price">₹<?php echo $row['product_price']; ?></div>
                    <div class="product-description"><?php echo $row['description']; ?></div>
                    <div class="quantity-container">
                        <button class="quantity-button" onclick="decreaseQuantity('<?php echo $row['product_id']; ?>')">-</button>
                        <span class="quantity" id="quantity-product<?php echo $row['product_id']; ?>">1</span>
                        <button class="quantity-button" onclick="increaseQuantity('<?php echo $row['product_id']; ?>')">+</button>
                    </div>
                    <button class="add-to-cart-button" onclick="addToCart(<?php echo $row['product_id']; ?>, <?php echo $row['product_price']; ?>)">Add to Cart</button>

                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<!-- Fertilizer Products Section -->
<div class="product-section">
    <h2>Bio Organic Fertilizer</h2>
    <p>This fertilizer is much better than cow and goat dung. and also better than vermic compose.</p>
    <div class="product-grid">
        <?php
        // Fetch fertilizer products from the database
        $fertilizer_query = "SELECT * FROM products WHERE product_type = 'fertilizer'";
        $fertilizer_result = $conn->query($fertilizer_query);

        // Loop through fertilizer products fetched from the database
        while ($row = $fertilizer_result->fetch_assoc()) {
            // Display fertilizer product card
            // Similar to the existing product card structure
            ?>
            <div class="product-card" id="product<?php echo $row['product_id']; ?>">
                <!-- Product details here -->
                <div class="product-image">
                    <img src="/assets/images/<?php echo $row['image']; ?>" alt="<?php echo $row['product_name']; ?>">
                </div>
                <div class="product-info">
                    <div class="product-title"><?php echo $row['product_name']; ?></div>
                    <div class="product-price">₹<?php echo $row['product_price']; ?></div>
                    <div class="product-description"><?php echo $row['description']; ?></div>
                    <div class="quantity-container">
                        <button class="quantity-button" onclick="decreaseQuantity('<?php echo $row['product_id']; ?>')">-</button>
                        <span class="quantity" id="quantity-product<?php echo $row['product_id']; ?>">1</span>
                        <button class="quantity-button" onclick="increaseQuantity('<?php echo $row['product_id']; ?>')">+</button>
                    </div>
                    <button class="add-to-cart-button" onclick="addToCart(<?php echo $row['product_id']; ?>, <?php echo $row['product_price']; ?>)">Add to Cart</button>

                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
 <!-- Cart container with customer details form -->
 <div class="cart-container" id="cart-container" style="display: none;">

<h2>Selected Products</h2>
<form id="purchase-form" method="post">
    <input type="hidden" id="selected_products" name="selected_products">
    <input type="hidden" id="total_amount" name="total_amount">
    <!-- Product details will be displayed here dynamically -->
</form>
<div class="cart-notification" id="cart-notification">
    <i class="fas fa-arrow-down fa-2x"></i> <!-- Assuming you're using Font Awesome for icons -->
</div>

<div id="total-amount"></div>
<p class="proceed-text">By clicking "Proceed," your selected products will be registered, and you will be redirected to the payment process. Please review your selection before proceeding.</p>
<button class="proceed-button">Proceed</button>
</div>

<div class="popup-overlay" id="popup-overlay"></div>
<div class="popup" id="popup" style="display: none;">
<p class="head">Are you sure you want to purchase the selected products?</p>
<p>This action cannot be undone. Click "Continue" to proceed to the payment, or "Cancel" to stay on this page.</p>
<button onclick="redirectToPayment()">Continue</button>
<button onclick="closePopup()">Cancel</button>
</div>

<!-- Add this HTML code after the first popup -->
<div class="popup-overlay" id="payment-popup-overlay" style="display: none;"></div>
<div class="popup" id="payment-popup" style="display: none;">
<div id="company-name">Desi Chicken Farm and Nursery Bio</div>
    <div id="bill-details"></div> <!-- Bill details will be shown here -->
    <p>Please select your payment method:</p>
    <button onclick="choosePaymentMethod('COD')">Cash on Delivery</button>
    <button onclick="choosePaymentMethod('Online')">Online Payment</button>
</div>

<script>
        // JavaScript for adding products to the cart
        let selectedProducts = {};

        function addToCart(productId, productPrice) {
          selectedProducts[productId.toString()] = (selectedProducts[productId.toString()] || 0) + 1;

            updateCartDisplay();

            showCartNotification();
        }

        function increaseQuantity(productId) {
            selectedProducts[productId] = (selectedProducts[productId] || 0) + 1;
            updateQuantityDisplay(productId);
        }

        function decreaseQuantity(productId) {
            const currentQuantity = selectedProducts[productId] || 0;
            if (currentQuantity > 0) {
                selectedProducts[productId] = currentQuantity - 1;
                updateQuantityDisplay(productId);
            }
        }

        function updateQuantityDisplay(productId) {
            const quantityElement = document.getElementById('quantity-product' + productId);
            if (quantityElement) {
                quantityElement.textContent = selectedProducts[productId] || 0;
            }
        }

        function updateCartDisplay() {
            const productListForm = document.getElementById('purchase-form');
            const totalAmountDisplay = document.getElementById('total-amount');
            const cartContainer = document.getElementById('cart-container');

            // Clear previous content
            productListForm.innerHTML = '';
            totalAmountDisplay.innerHTML = '';

            // Update the product list
            Object.entries(selectedProducts).forEach(([productId, quantity]) => {
                const productName = document.getElementById('product' + productId).querySelector('.product-title').textContent;
                const productPrice = parseFloat(document.getElementById('product' + productId).querySelector('.product-price').textContent.slice(1));

                // Create a new div element to display the product details
                const productDetailsDiv = document.createElement('div');
                productDetailsDiv.classList.add('product-details');

                // Create elements for product name, quantity, and price
                const productNameElement = document.createElement('span');
                productNameElement.classList.add('product-name');
                productNameElement.textContent = productName;

                const productQuantityElement = document.createElement('span');
                productQuantityElement.classList.add('product-quantity');
                productQuantityElement.textContent = `Quantity: ${quantity}`; // Display quantity separately

                const productPriceElement = document.createElement('span');
                productPriceElement.classList.add('product-price');
                productPriceElement.textContent = `$${(productPrice * quantity).toFixed(2)}`;

        // Create remove button
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.classList.add('remove-button');
        removeButton.addEventListener('click', () => removeFromCart(productId));

        // Append elements to product details div
        productDetailsDiv.appendChild(productNameElement);
        productDetailsDiv.appendChild(productQuantityElement);
        productDetailsDiv.appendChild(productPriceElement);
        productDetailsDiv.appendChild(removeButton); // Append remove button

        productListForm.appendChild(productDetailsDiv);
    });
    function removeFromCart(productId) {
    // Remove the product from selectedProducts object
    delete selectedProducts[productId];
    
    // Update the cart display
    updateCartDisplay();
}

            // Create a hidden input field to store the selected products
            const inputProducts = document.createElement('input');
            inputProducts.type = 'hidden';
            inputProducts.name = 'selected_products';
            inputProducts.value = JSON.stringify(selectedProducts);
            productListForm.appendChild(inputProducts);

            // Calculate and display the total amount
            const totalAmount = Object.entries(selectedProducts).reduce((total, [productId, quantity]) => {
                const productPrice = parseFloat(document.getElementById('product' + productId).querySelector('.product-price').textContent.slice(1));
                return total + productPrice * quantity;
            }, 0);

            const inputTotalAmount = document.createElement('input');
            inputTotalAmount.type = 'hidden';
            inputTotalAmount.name = 'total_amount';
            inputTotalAmount.value = totalAmount.toFixed(2);
            productListForm.appendChild(inputTotalAmount);

            // Display the total amount
            totalAmountDisplay.textContent = `Total Amount: $${totalAmount.toFixed(2)}`;

            // Show the cart container if products are selected
            cartContainer.style.display = Object.keys(selectedProducts).length > 0 ? 'block' : 'none';
        }

        // Event listener for the "proceed" button
        document.querySelector('.proceed-button').addEventListener('click', function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Update the cart display before showing the popup
            updateCartDisplay();

            // Show the pop-up message and overlay
            document.getElementById('popup-overlay').style.display = 'block';
            document.getElementById('popup').style.display = 'block';
        });

        function redirectToPayment() {
    // Close the first popup
    closePopup();

    // Show the payment method popup and overlay
    document.getElementById('payment-popup-overlay').style.display = 'block';
    document.getElementById('payment-popup').style.display = 'block';
}

        // Function to close the pop-up
        function closePopup() {
            document.getElementById('popup-overlay').style.display = 'none';
            document.getElementById('popup').style.display = 'none';
        }

        // Function to show bill details in the payment popup
    function showBillDetails() {
        const billDetailsContainer = document.getElementById('bill-details');
        billDetailsContainer.innerHTML = ''; // Clear previous content

        // Iterate over selected products to display them in the bill
        Object.entries(selectedProducts).forEach(([productId, quantity]) => {
            const productName = document.getElementById('product' + productId).querySelector('.product-title').textContent;
            const productPrice = parseFloat(document.getElementById('product' + productId).querySelector('.product-price').textContent.slice(1));

            const productBillItem = document.createElement('div');
            productBillItem.textContent = `${productName} x ${quantity}: $${(productPrice * quantity).toFixed(2)}`;
            billDetailsContainer.appendChild(productBillItem);
        });

        // Display total amount in the bill
        const totalAmount = document.getElementById('total-amount').textContent;
        const totalAmountElement = document.createElement('div');
        totalAmountElement.textContent = totalAmount;
        billDetailsContainer.appendChild(totalAmountElement);
    }

    // Function to choose payment method and submit form
    function choosePaymentMethod(paymentMethod) {
        // Set the payment method in a hidden input field
        const paymentMethodInput = document.createElement('input');
        paymentMethodInput.type = 'hidden';
        paymentMethodInput.name = 'payment_method';
        paymentMethodInput.value = paymentMethod;
        document.getElementById('purchase-form').appendChild(paymentMethodInput);

        // Hide the payment popup
        document.getElementById('payment-popup-overlay').style.display = 'none';
        document.getElementById('payment-popup').style.display = 'none';

        // Submit the form
        document.getElementById('purchase-form').submit();
    }

    // Function to submit the form and show the payment method popup
    function redirectToPayment() {
        // Close the first popup
        closePopup();

        // Show the bill details in the payment popup
        showBillDetails();

        // Show the payment method popup and overlay
        document.getElementById('payment-popup-overlay').style.display = 'block';
        document.getElementById('payment-popup').style.display = 'block';
    }

    // Function to show the cart notification pop-up
function showCartNotification() {
    const cartNotification = document.getElementById('cart-notification');
    cartNotification.classList.add('show');
}

// Function to hide the cart notification pop-up
function hideCartNotification() {
    const cartNotification = document.getElementById('cart-notification');
    cartNotification.classList.remove('show');
}

// Function to check if the cart is visible at the end of the page and show notification accordingly
function checkCartVisibility() {
    const cartContainer = document.getElementById('cart-container');
    const windowHeight = window.innerHeight;
    const containerBottom = cartContainer.getBoundingClientRect().bottom;

    if (containerBottom > windowHeight) {
        showCartNotification();
    } else {
        hideCartNotification();
    }
}

// Event listeners for scrolling and resizing
window.addEventListener('scroll', checkCartVisibility);
window.addEventListener('resize', checkCartVisibility);
    </script>
    
</body>

</html>