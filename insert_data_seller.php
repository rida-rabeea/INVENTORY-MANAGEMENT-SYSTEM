<?php
$connect = mysqli_connect("localhost", "root", "root1234", "inventory") or die("Connection Failed");

if (isset($_POST['create_account_seller'])) {
    $email = $_POST['emailid'];
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $company = $_POST['companyname'];
    $city = $_POST['city'];

    // Ensure the table name is correct
    $query = "INSERT INTO `seller`(`NAME`, `EMAIL_ID`, `PASSWORD`,`COMPANY_NAME`,`CITY`) VALUES ('$username','$email','$password','$company','$city')";
    $run = mysqli_query($connect, $query);

    if ($run) {
        // Redirect to a confirmation page
        header("Location: seller_added.php");
        exit();
    } else {
        echo "<script>alert('Could not add user.');</script>";
    }
}
?>
