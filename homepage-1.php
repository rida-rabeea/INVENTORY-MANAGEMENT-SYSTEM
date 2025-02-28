<!DOCTYPE html>
<html>
<head>
    <title>RS Electronics</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        html, body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to right, #ff66c4, #ffde59);
            text-align: center;
            margin: 0;
            padding: 0;
            min-height: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .background-shape {
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            top: -50px;
            left: -50px;
            animation: move1 10s infinite linear;
        }
        .background-shape2 {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            bottom: -100px;
            right: -100px;
            animation: move2 15s infinite linear;
        }
        @keyframes move1 {
            0% { transform: translate(0, 0); }
            50% { transform: translate(200px, 200px); }
            100% { transform: translate(0, 0); }
        }
        @keyframes move2 {
            0% { transform: translate(0, 0); }
            50% { transform: translate(-200px, -200px); }
            100% { transform: translate(0, 0); }
        }
        .container {
            background: linear-gradient(to right, #ffc3a0, #ffafbd);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            margin: auto;
            flex: 1;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 20px;
        }
        .header img {
            width: 150px;
            height: 150px;
        }
        .header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 48px;
            color: #4b0082;
            margin: 10px 0 5px;
        }
        .description {
            font-size: 18px;
            color: #333;
            margin: 10px 0 20px;
        }
        .product-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .product-icons button {
            width: 200px;
            height: 75px;
            margin: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            background: linear-gradient(to right, #681370, #b27cd8);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product-icons button i {
            margin-right: 10px;
        }
        .product-icons button:hover {
            background: #551a8b;
        }
        .features {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .feature {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 45%;
            max-width: 300px;
            text-align: left;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        .feature h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            color: #4b0082;
            margin-bottom: 10px;
        }
        .feature p {
            font-size: 16px;
            color: #333;
        }
        .footer {
            padding: 10px 0;
            background: rgba(255, 255, 255, 0.8);
            border-top: 1px solid #ddd;
            font-size: 16px;
            text-align: center;
            width: 100%;
            position: relative;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: #4b0082;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="background-shape"></div>
    <div class="background-shape2"></div>
    <div class="container">
        <div class="header">
            <img src="edited_logo.png" alt="RS Electronics Logo">
            <h1>RS ELECTRONICS</h1>
        </div>
        <div class="description">
            Welcome to RS Electronics! We specialize in providing the best electronics products and services. Our mission is to innovate and deliver top-notch solutions to our customers.
        </div>
        <div class="product-icons">
            <button onclick="navigateTo('owner.php')"><i class="fas fa-user-tie"></i>Owner</button>
            <button onclick="navigateTo('customer.php')"><i class="fas fa-user"></i>Customer</button>
            <button onclick="navigateTo('seller.php')"><i class="fas fa-user-tag"></i>Seller</button>
        </div>
        <div class="features">
            <div class="feature">
                <h2>High Quality Products</h2>
                <p>We offer a wide range of high-quality electronic products that meet the highest standards of performance and durability.</p>
            </div>
            <div class="feature">
                <h2>Innovative Solutions</h2>
                <p>Our team is dedicated to developing innovative solutions that cater to the ever-evolving needs of our customers.</p>
            </div>
            <div class="feature">
                <h2>Excellent Support</h2>
                <p>We provide excellent customer support to ensure that all your queries and issues are resolved promptly and effectively.</p>
            </div>
            <div class="feature">
                <h2>Competitive Prices</h2>
                <p>Our products and services are offered at competitive prices, ensuring that you get the best value for your money.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Contact us:</p>
        <p>Phone: +1234567890 | Email: info@rselectronics.com</p>
        <p>Address: 1234 Electronics St, Tech City, TE 56789</p>
        <p>Follow us on <a href="https://www.instagram.com/rselectronics" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></p>
    </div>
    <script>
        function navigateTo(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>
