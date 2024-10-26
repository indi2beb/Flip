

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Flipkart Style</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f1f3f6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #2874f0;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header .logo {
            font-size: 24px;
            font-weight: 700;
        }

        .header .nav-links {
            display: flex;
            gap: 20px;
        }

        .order-confirmation {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .order-confirmation.show {
            opacity: 1;
        }

        .order-confirmation h1 {
            font-size: 24px;
            font-weight: 500;
            color: #333;
        }

        .order-details {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        .order-details .detail {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .order-details .detail:last-child {
            border-bottom: none;
        }

        .order-details .detail label {
            font-weight: 500;
            color: #555;
        }

        .order-details .detail span {
            font-weight: 400;
            color: #888;
        }

        .thank-you {
            text-align: center;
            margin-top: 50px;
            color: #333;
        }

        .thank-you h2 {
            font-size: 28px;
            font-weight: 500;
        }

        .thank-you p {
            font-size: 16px;
            color: #555;
        }

        .footer {
            margin-top: 40px;
            padding: 10px 20px;
            background-color: #2874f0;
            color: white;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }

        .track-order {
            text-align: center;
            margin-top: 30px;
        }

        .track-order button {
            background-color: #ff9f00;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .track-order button:hover {
            background-color: #f80;
        }

        .delivery-timeline {
            margin-top: 20px;
            background-color: #e3f2fd;
            padding: 20px;
            border-radius: 5px;
        }

        .delivery-timeline .step {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .delivery-timeline .step:last-child {
            margin-bottom: 0;
        }

        .delivery-timeline .icon {
            background-color: #2874f0;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .delivery-timeline .desc {
            font-size: 14px;
            color: #333;
        }

        /* Tick Animation */
        .tick-animation {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f3f6;
        }

        .tick-circle {
            width: 140px;
            height: 140px;
            background-color: #2874f0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: tickAppear 1s ease-in-out;
        }

        .tick-mark {
            font-size: 100px;
            color: white;
            opacity: 0;
            animation: tickMarkAppear 1s ease-in-out;
        }

        @keyframes tickAppear {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.9;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes tickMarkAppear {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Flipkart</div>
        <div class="nav-links">
            <a href="/" style="color: white;">Home</a>
            <a href="/" style="color: white;">Orders</a>
            <a href="/" style="color: white;">Account</a>
        </div>
    </div>

    <div class="container">
        <!-- Tick Animation -->
        <div class="tick-animation" aria-live="assertive">
            <div class="tick-circle">
                <div class="tick-mark">✔</div>
            </div>
        </div>

        <!-- Order Confirmation Details -->
        <div class="order-confirmation">
            <h1>Order Confirmed</h1>
            <div class="thank-you">
                <h2>Thank you for your purchase!</h2>
                <p>Your order has been placed successfully and will be delivered soon.</p>
            </div>
            
            <div class="order-details">
                <div class="detail">
                    <label for="order-id">Order ID:</label>
                    <span id="order-id"></span>
                </div>
                <div class="detail">
                    <label for="order-date">Order Date:</label>
                    <span id="order-date"></span>
                </div>
                <div class="detail">
                    <label>Payment Method:</label>
                    <span>UPI / QR Code</span>
                </div>
            </div>

            <div class="track-order">
                <button onclick="location.href='https://pr.tapgetrewrd.com/'">Track Order</button>
            </div>

            <div class="delivery-timeline">
                <h3 style="margin-bottom: 10px; font-weight: 500; color: #333;">Delivery Timeline</h3>
                <div class="step">
                    <div class="icon">✓</div>
                    <div class="desc">Order Placed</div>
                </div>
                <div class="step">
                    <div class="icon"></div>
                    <div class="desc">Dispatched</div>
                </div>
                <div class="step">
                    <div class="icon"></div>
                    <div class="desc">Out for Delivery</div>
                </div>
                <div class="step">
                    <div class="icon"></div>
                    <div class="desc">Delivered</div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Flipkart. All rights reserved.</p>
    </div>

    <script>
        // Function to generate a unique order ID
        function generateOrderID() {
            const timestamp = new Date().getTime();
            return 'FLP' + timestamp;
        }

        // Function to get today's date in Indian Time
        function getIndianDate() {
            const now = new Date();
            const options = { timeZone: 'Asia/Kolkata', year: 'numeric', month: 'long', day: 'numeric' };
            return now.toLocaleDateString('en-IN', options);
        }

        // Set the order ID and date
        document.getElementById('order-id').textContent = generateOrderID();
        document.getElementById('order-date').textContent = getIndianDate();

        // Show order confirmation after tick animation
        setTimeout(() => {
            document.querySelector('.tick-animation').style.display = 'none';
            document.querySelector('.order-confirmation').classList.add('show');
        }, 1000); // Display tick animation for 1 second
    </script>
</body>
</html>
