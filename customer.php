<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #8025c1, #df7db9);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
            color: white;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            gap: 20px;
        }

        .product {
            background: white;
            color: #8526c9;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            padding: 15px;
            transition: transform 0.3s;
        }

        .product img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product h2 {
            font-size: 1.5em;
            margin: 10px 0;
        }

        .product p {
            margin: 10px 0;
        }

        .buy-now {
            text-decoration: none;
            color: #ffffff;
            background-color: #4b0082;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }

        .buy-now:hover {
            background-color: #ffffff;
            color: #4b0082;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .header {
            background: #4b0082;
            color: white;
            width: 100%;
            text-align: center;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>
<div class="background-shape"></div>
<div class="background-shape2"></div>

<div class="header">
        <h1>Product Catalog</h1>
    </div>

    <div class="container">
        <!-- Product 1 -->
        <div class="product">
            <img src="bluetooth.jpg" alt="Product 1 Image">
            <h2>BLUETOOTH SPEAKER</h2>
            <p>Experience crystal-clear sound and powerful bass with our portable Bluetooth speaker. Perfect for indoor and outdoor use, this compact device offers up to 10 hours of playtime on a single charge. </p>
            <p>Price: Rs.4999.99</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 2 -->
        <div class="product">
            <img src="game.jpg" alt="Product 2 Image">
            <h2>GAMING CONSOLE</h2>
            <p>Dive into immersive gaming with our state-of-the-art gaming console. Featuring stunning graphics, lightning-fast load times, and an expansive game library, this console is designed for serious gamers. </p>
            <p>Price: Rs.150000</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 3 -->
        <div class="product">
            <img src="headphones.jpg" alt="Product 3 Image">
            <h2>HEADPHONES</h2>
            <p>Elevate your listening experience with these premium wireless headphones. Equipped with active noise cancellation (ANC), they block out distractions so you can enjoy your music, podcasts, and calls in peace.</p>
            <p>Price: Rs. 25000</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 4 -->
        <div class="product">
            <img src="laptop.jpg" alt="Product 4 Image">
            <h2>LAPTOP</h2>
            <p>Unleash your productivity with this sleek, lightweight laptop. Featuring a 15.6-inch Full HD display, 10th Gen Intel Core i7 processor, and 16GB RAM, it delivers exceptional performance for multitasking, gaming, and content creation</p>
            <p>Price: Rs.80000</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 5 -->
        <div class="product">
            <img src="phone.jpg" alt="Product 5 Image">
            <h2>SMARTPHONE</h2>
            <p>With a stunning 6.7-inch OLED display, 5G connectivity, and a blazing fast octa-core processor, this device ensures seamless multitasking, vibrant visuals, and ultra-responsive performance.</p>
            <p>Price: Rs.59999.99</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 6 -->
        <div class="product">
            <img src="route.jpg" alt="Product 6 Image">
            <h2>WIRELESS ROUTER</h2>
            <p>Enhance your home network with our high-speed wireless router. Designed for seamless streaming, gaming, and browsing, this router provides robust coverage and stable connections throughout your home.</p>
            <p>Price: Rs.8950.50</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 7 -->
        <div class="product">
            <img src="image.png" alt="Product 7 Image">
            <h2>DIGITAL CAMERA</h2>
            <p>Capture stunning photos and videos with our cutting-edge digital camera. Equipped with high-resolution sensors, advanced autofocus, and versatile shooting modes, this camera is perfect for both amateur and professional photographers.</p>
            <p>Price: Rs.49550.75</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 8 -->
        <div class="product">
            <img src="samrtassi.jpg" alt="Product 8 Image">
            <h2>SMART HOME ASSISTANT</h2>
            <p>Transform your home into a smart home with our versatile smart home assistant. Control your lights, thermostat, and other smart devices with just your voice.</p>
            <p>Price: Rs. 129000</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 9 -->
        <div class="product">
            <img src="smartwatch.webp" alt="Product 9 Image">
            <h2>SMARTWATCH</h2>
            <p>Meet your new fitness and lifestyle companion, the cutting-edge smartwatch. Featuring a sleek, water-resistant design and a vibrant AMOLED display, it seamlessly blends style with functionality. </p>
            <p>Price: Rs.2500</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>

        <!-- Product 10 -->
        <div class="product">
            <img src="tab.jpg" alt="Product 10 Image">
            <h2>SMART TABLET</h2>
            <p>Discover the perfect blend of performance and portability with this versatile tablet. The 10.5-inch Retina display delivers stunning visuals, whether you're streaming, gaming, or working on the go. </p>
            <p>Price: Rs.22799.99</p>
            <a href="customer_cart_page.php" class="buy-now">Buy Now</a>
        </div>
    </div>
</body>
</html>
