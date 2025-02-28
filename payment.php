<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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
            max-width: 600px;
            margin: 20px auto;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        input[type="text"], input[type="number"], input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ddd;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Page</h1>
        <form action="payment_confirmation.php" method="POST">
            <label for="card_number">Card Number:</label>
            <input type="text" id="card_number" name="card_number" required>

            <label for="expiry_date">Expiry Date (MM/YY):</label>
            <input type="text" id="expiry_date" name="expiry_date" required>

            <label for="cvv">CVV:</label>
            <input type="number" id="cvv" name="cvv" required>

            <label for="billing_address">Billing Address:</label>
            <input type="text" id="billing_address" name="billing_address" required>

            <button type="submit">Complete Payment</button>
        </form>
    </div>
</body>
</html>
