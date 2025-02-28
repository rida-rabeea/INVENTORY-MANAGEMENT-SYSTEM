<?php
session_start(); // Start the session

$connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

if (isset($_POST['cust_login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM CUSTOMER WHERE EMAIL='$username' AND PASSWORD='$password'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['cust_id'] = $row['CUST_ID']; // Store customer ID in session
        header("Location: mycart.php"); // Redirect to the cart page
        exit();
    } else {
        echo "<script>alert('User Not Found.');</script>";
    }
}

mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Create Account</title>
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
            color: white;
        }

        .container {
            background: white;
            color: #8526c9;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }

        input[type="text"], input[type="password"], input[type="email"] {
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

        .link {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #4b0082;
        }

        .link:hover {
            text-decoration: underline;
        }

        
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="cust_login">Login</button>
        </form>
        
    </div>
</body>
</html>
