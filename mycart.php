<?php
session_start(); // Start the session

if (!isset($_SESSION['cust_id'])) {
    echo "Customer not logged in.";
    exit();
}

$cust_id = $_SESSION['cust_id'];
$connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

// Query to fetch customer details
$customer_query = "SELECT NAME FROM CUSTOMER WHERE CUST_ID='$cust_id'";
$customer_result = mysqli_query($connect, $customer_query);
$customer_row = mysqli_fetch_assoc($customer_result);
$customer_name = $customer_row['NAME'];

// Query to fetch cart details
$query = "SELECT p.PRODUCT_ID, p.PRODUCT_NAME, p.DESCRIPTION, p.PRICE, SUM(pur.QUANTITY) AS TOTAL_QTY 
          FROM PRODUCT p
          JOIN PURCHASES pur ON p.PRODUCT_ID = pur.PRODUCT_ID_FK
          WHERE pur.CUST_ID_FK = $cust_id
          GROUP BY p.PRODUCT_ID, p.PRODUCT_NAME, p.DESCRIPTION, p.PRICE";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #8025c1, #df7db9);
            margin: 0;
            padding: 0;
            color: white;
        }

        .container {
            background: white;
            color: #8526c9;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            margin: 20px auto;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #4b0082;
            padding: 10px;
        }

        th {
            background-color: #4b0082;
            color: white;
        }

        td {
            background-color: #ff66c4;
            color: white;
            text-align: center;
        }

        button {
            background-color: #4b0082;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ffffff;
            color: #4b0082;
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
        <h1>My Cart</h1>
        <p>Welcome, <?php echo htmlspecialchars($customer_name); ?>!</p> <!-- Display customer name -->
        <table>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Total Quantity</th>
            </tr>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['PRODUCT_ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRODUCT_NAME']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['DESCRIPTION']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRICE']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['TOTAL_QTY']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No items in cart</td></tr>";
            }

            mysqli_close($connect);
            ?>
        </table>
        <form action="payment.php" method="POST">
            <br>
            <button type="submit" name="pay">Proceed to Pay</button>
        </form>
    </div>
</body>
</html>
