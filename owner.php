<?php
$connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM OWNER WHERE EMAIL_ID='$username' AND PASSWORD='$password'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        header("Location: owner_main_page.php"); // Redirect to your next page
        exit();
    } else {
        echo "<script>alert('User Not Found.');</script>";
    }
}

if (isset($_POST['create_account'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO OWNER (EMAIL_ID, PASSWORD) VALUES ('$username', '$password')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>alert('Account Created Successfully!');</script>";
    } else {
        echo "<script>alert('Error Creating Account.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login/Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #ff66c4, #ffde59);
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            overflow: hidden;
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
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 90%;
        }
        h2 {
            margin-bottom: 20px;
            font-weight: 600;
            color: #4b0082;
        }
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            background-color: #4b0082;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #3e0069;
        }
        .toggle-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #4b0082;
            cursor: pointer;
            font-size: 14px;
        }
        .toggle-link:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function toggleForm() {
            var loginForm = document.getElementById('login-form');
            var createForm = document.getElementById('create-form');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                createForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                createForm.style.display = 'block';
            }
        }
    </script>
</head>
<body>
    <div class="background-shape"></div>
    <div class="background-shape2"></div>
    <div class="container">
        <div id="login-form">
            <h2>Login</h2>
            <form method="post">
                <input type="email" name="email" placeholder="Owner Email ID" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
            <div class="toggle-link" onclick="toggleForm()">Create an account</div>
        </div>
        <div id="create-form" style="display:none;">
            <h2>Create Account</h2>
            <form action=insert_data.php method="post">
                <input type="email" name="emailid" placeholder="Email ID" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password1" placeholder="Password" required>
                <button type="submit" name="create_account">Create Account</button>
            </form>
            <div class="toggle-link" onclick="toggleForm()">Already have an account? Login</div>
        </div>
    </div>
</body>
</html>
