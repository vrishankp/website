<?php
include 'header.php';

$username = $_POST['username'];
$password = $_POST['password'];

//code to prevent sql injection
  /* Redacted for GitHub*/

//salt and encrypt password
$salt = /* Redacted for GitHub*/;
$password = /* Redacted for GitHub*/;

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $query);
if($row = mysqli_fetch_array($result)) {
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    header("Location: index");
} else {
    $_SESSION['login_error'] = true;
    header("Location: login");
}
?>
