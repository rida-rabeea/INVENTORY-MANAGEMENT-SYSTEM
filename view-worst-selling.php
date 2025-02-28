
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Least Selling Product</title>
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
            max-width: 800px;
            text-align: center;
            position: relative;
            z-index: 1;
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
        .back-link {
            margin-top: 20px;
            display: block;
            text-decoration: none;
            color: #ffffff;
            background-color: #4b0082;
            padding: 10px 20px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }
        .back-link:hover {
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
        <h1>Least Selling Product</h1>
        <table>
            <tr>
                <th>PRODUCT ID</th>
                <th>PRODUCT NAME</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>TOTAL SOLD</th>
            </tr>
            <?php
            $connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

            $query = "
                SELECT p.PRODUCT_ID, p.PRODUCT_NAME, p.DESCRIPTION, p.PRICE, COUNT(od.PRODUCT_ID_FK) AS TOTAL_OCCURRENCES
                FROM ORDER_DETAILS od
                INNER JOIN PRODUCT p ON od.PRODUCT_ID_FK = p.PRODUCT_ID
                GROUP BY p.PRODUCT_ID, p.PRODUCT_NAME, p.DESCRIPTION, p.PRICE
                ORDER BY TOTAL_OCCURRENCES
                LIMIT 1
            ";

            $run = mysqli_query($connect, $query);

            if (!$run) {
                echo "<tr><td colspan='5'>Error: " . mysqli_error($connect) . "</td></tr>";
            } else {
                while ($row = mysqli_fetch_array($run)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['PRODUCT_ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRODUCT_NAME']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['DESCRIPTION']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['PRICE']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['TOTAL_OCCURRENCES']) . "</td>";
                    echo "</tr>";
                }
            }

            mysqli_close($connect);
            ?>
        </table>
        <a href="owner_main_page.php" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>
