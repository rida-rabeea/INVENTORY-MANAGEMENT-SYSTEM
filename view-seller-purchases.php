<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most bought from seller</title>
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
    </style>
</head>
<body>
<div class="background-shape"></div>
<div class="background-shape2"></div>

       
    <div class="container">
    <h1>SELLER WITH MOST PURCHASES</h1>
        <table>
            <tr>
                <th>SELLER ID</th>
                <th> NAME</th>
                <th>EMAIL</th>
               

            </tr>
            <?php
            $connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

            $query ="SELECT SELLER.SELLER_ID,SELLER.NAME,SELLER.EMAIL_ID FROM SELLER INNER JOIN SELLS ON SELLER.SELLER_ID=SELLS.SELLER_ID WHERE SELLS.PRODUCT_ID=( SELECT p.PRODUCT_ID
                                                         FROM ORDER_DETAILS od
                                                         INNER JOIN PRODUCT p ON od.PRODUCT_ID_FK = p.PRODUCT_ID
                                                         GROUP BY p.PRODUCT_ID, p.PRODUCT_NAME, p.DESCRIPTION, p.PRICE
                                                         ORDER BY COUNT(od.PRODUCT_ID_FK) DESC          
                                                         LIMIT 1)";
            

            $run = mysqli_query($connect, $query);

            if (!$run) {
                echo "<tr><td colspan='3'>Error: " . mysqli_error($connect) . "</td></tr>";
            } else {
                while ($row = mysqli_fetch_array($run)) 
                {
                    echo "<tr>";
                    echo "<td>" . $row['SELLER_ID'] . "</td>";
                    echo "<td>" . $row['NAME'] . "</td>";
                    echo "<td>" . $row['EMAIL_ID'] . "</td>";
                   
                    echo "</tr>";
                }
                    
                }
            

            mysqli_close($connect);
            ?>
        </div>
        <a href="owner_main_page.php" class="back-link">Back to Dashboard</a>
    </div>
</body>
</html>