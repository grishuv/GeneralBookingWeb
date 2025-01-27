<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        /* Additional styles for the FAQs page */
        .accordion {
            background-color: #f7f7f7;
            color: #333;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .accordion:hover {
            background-color: #ddd;
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .panel.show {
            max-height: 500px; /* Adjust this value based on your content */
        }

        .accordion-icon {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Frequently Asked Questions</h1>
    </header>

    <main>
        <div class="accordion">
            <i class="accordion-icon fas fa-chevron-down"></i> <!-- Font Awesome icon for the accordion -->
            Can I have the products delivered to my address?
        </div>
        <div class="panel">
            <p>No, we do not offer delivery services. All products must be collected from our farm location.</p>
        </div>

        <div class="accordion">
            <i class="accordion-icon fas fa-chevron-down"></i>
            What are the farm's opening hours for collection?
        </div>
        <div class="panel">
            <p>Our farm is open for product collection from Monday to Saturday, 9:00 AM to 5:00 PM. We are closed on Sundays.</p>
        </div>

        <div class="accordion">
            <i class="accordion-icon fas fa-chevron-down"></i>
            Do you offer refunds or returns?
        </div>
        <div class="panel">
            <p>We do not offer refunds or returns for purchased products unless they are damaged or defective upon collection. Please inspect your products carefully before leaving the farm.</p>
        </div>

        <div class="accordion">
            <i class="accordion-icon fas fa-chevron-down"></i>
            Can I bring my own containers for product collection?
        </div>
        <div class="panel">
            <p>Yes, you are welcome to bring your own containers for collecting products. However, please ensure that your containers are clean and suitable for the type of product you are collecting.</p>
        </div>

        <!-- Add more accordion items here -->

    </main>

    <script>
        // JavaScript to toggle the accordion panels
        const accordions = document.querySelectorAll('.accordion');

        accordions.forEach(accordion => {
            accordion.addEventListener('click', function() {
                this.classList.toggle('active');
                const panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                }
            });
        });
    </script>
</body>
</html>
