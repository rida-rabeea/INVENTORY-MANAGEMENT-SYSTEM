<?php
session_start(); // Start the session

// Connect to the database
$connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

// Prepare and execute query to fetch all products sold by all sellers
$query = "
    SELECT s.SELLER_ID, sl.NAME, p.PRODUCT_ID, p.PRODUCT_NAME, p.DESCRIPTION, p.PRICE, COUNT(od.PRODUCT_ID_FK) AS TOTAL_SOLD
FROM SELLS s
INNER JOIN PRODUCT p ON s.PRODUCT_ID = p.PRODUCT_ID
INNER JOIN ORDER_DETAILS od ON p.PRODUCT_ID = od.PRODUCT_ID_FK
INNER JOIN SELLER sl ON s.SELLER_ID = sl.SELLER_ID
GROUP BY s.SELLER_ID, sl.NAME, p.PRODUCT_ID, p. PRODUCT_NAME, p.DESCRIPTION, p.PRICE
ORDER BY s.SELLER_ID, p.PRODUCT_ID;

";

$result = mysqli_query($connect, $query);

// Check if the query was successful
if (!$result) {
    die("Error: " . mysqli_error($connect));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Sold by All Sellers</title>
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
            height: 100vh;
            overflow: auto;
            color: white;
        }
        .container {
            background: white;
            color: #8526c9;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1000px;
            text-align: center;
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
        .ripple {
            position: relative;
            overflow: hidden;
        }
        .ripple::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            width: 100%;
            height: 100%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.6s, transform 0.6s;
        }
        .ripple:active::after {
            opacity: 1;
            transform: translate(-50%, -50%) scale(2);
        }
    </style>
</head>
<body>
    <div class="container">
        
        <table>
            <tr>
                <th>SELLER ID</th>
                <th>SELLER NAME</th>
                <th>PRODUCT ID</th>
                <th>PRODUCT NAME</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>TOTAL SOLD</th>
            </tr>
            <?php
            // Check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['SELLER_ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['NAME']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRODUCT_ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRODUCT_NAME']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['DESCRIPTION']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRICE']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['TOTAL_SOLD']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No products found.</td></tr>";
            }

            mysqli_close($connect);
            ?>
        </table>
    </div>
</body>
</html>
