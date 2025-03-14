<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Reports</title>
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
            overflow: hidden;
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
        <h1>Product Reports</h1>
        <table>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Quantity Available</th>
            </tr>

            <?php
            $connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

            if (isset($_POST['view_product_reports'])) {
                $query = "SELECT * FROM `product` WHERE 1";
                $run = mysqli_query($connect, $query);

                while ($row = mysqli_fetch_array($run)) {
                    echo "<tr>";
                    echo "<td>" . $row['PRODUCT_ID'] . "</td>";
                    echo "<td>" . $row['PRODUCT_NAME'] . "</td>";
                    echo "<td>" . $row['QTY_AVAILABLE'] . "</td>";
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
