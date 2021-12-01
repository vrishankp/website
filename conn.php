<?php
$host="localhost";
$user=/* Redacted for GitHub*/;
$password=/* Redacted for GitHub*/;
$dbname=/* Redacted for GitHub*/;

$con = new mysqli($host, $user, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
//$con->close();
?>
