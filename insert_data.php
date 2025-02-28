<?php
$connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

if (isset($_POST['create_account'])) {
    $email = $_POST['emailid'];
    $username = $_POST['username'];
    $password = $_POST['password1'];

    $query = "INSERT INTO `owner`(`NAME`, `EMAIL_ID`, `PASSWORD`) VALUES ('$username','$email','$password')";
    $run = mysqli_query($connect, $query);

    if ($run) {
        // Redirect to a confirmation page
        header("Location: user_added.php");
        exit();
    } else {
        echo "<script>alert('Could not add user.');</script>";
    }
}
?>
