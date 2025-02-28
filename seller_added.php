<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Added</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #ff99cc, #cc99ff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            text-align: center;
        }
        .message-container {
            background: white;
            color: #8526c9;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }
        p {
            margin-bottom: 20px;
        }
        .back-link {
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
    </style>
</head>
<body>
    <div class="message-container">
        <h1>Seller Added Successfully!</h1>
        <p>Your account has been created. Please <a href="seller.php" class="back-link">login again</a>.</p>
    </div>
</body>
</html>
