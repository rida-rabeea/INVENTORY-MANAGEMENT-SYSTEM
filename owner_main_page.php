<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #4b0082, #ff66c4);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }
        .container {
            background: white;
            color: #4b0082;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            text-align: center;
            overflow: auto; /* Enable scrolling */
            max-height: 90vh; /* Limit the maximum height */
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }
        .card {
            background: #4b0082;
            color: white;
            border-radius: 12px;
            padding: 20px;
            margin: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            flex: 1; /* Equal width distribution */
            min-width: 200px; /* Minimum width for each card */
            position: relative; /* For positioning the button */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background-color: #ff66c4; /* Change background color on hover */
        }
        .icon {
            font-size: 3em;
            margin-bottom: 10px;
        }
        .title {
            font-size: 1.2em;
            font-weight: 600;
        }
        .view-button {
            background-color: #ffffff;
            color: #4b0082;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            align-self: center;
            margin-top: 10px;
        }
        .view-button:hover {
            background-color: #4b0082;
            color: white;
        }
        .cards {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
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
    <div class="container">
        <h1>Owner Dashboard</h1>
        <div class="cards">
            <div class="card">
                <div class="icon"><i class="fas fa-chart-line"></i></div>
                <div class="title">View Product Reports</div>
                <form action="view-product.php" method="post">
                    <button type="submit" class="view-button" name="view_product_reports">View</button>
                </form>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-chart-pie"></i></div>
                <div class="title">View Seller Reports</div>
                <form action="view_seller_reports.php" method="post">
                    <button type="submit" class="view-button" name="view_seller_reports">View</button>
                </form>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-shopping-bag"></i></div>
                <div class="title">View Top Selling Product</div>
                <form action="view-best-selling.php" method="post">
                    <button type="submit" class="view-button" name="view_best_selling">View</button>
                </form>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                <div class="title">View Least Selling Product</div>
                <form action="view-worst-selling.php" method="post">
                    <button type="submit" class="view-button" name="view_worst_selling">View</button>
                </form>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <div class="title">View Order Reports</div>
                <form action="view_order_reports.php" method="post">
                    <button type="submit" class="view-button" name="view_order_reports">View</button>
                </form>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="title">View Most Purchased From Seller</div>
                <form action="view-seller-purchases.php" method="post">
                    <button type="submit" class="view-button" name="view_seller_purchases">View</button>
                </form>
            </div>
            <div class="card">
                <div class="icon"><i class="fas fa-user-friends"></i></div>
                <div class="title">View Seller Least Purchased From</div>
                <form action="view-seller-least-purchased.php" method="post">
                    <button type="submit" class="view-button" name="view_seller_least_purchased">View</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.addEventListener('mouseover', function () {
                    this.style.backgroundColor = '#ff66c4';
                });
                card.addEventListener('mouseout', function () {
                    this.style.backgroundColor = '#4b0082';
                });
            });
        });
    </script>
</body>
</html>
