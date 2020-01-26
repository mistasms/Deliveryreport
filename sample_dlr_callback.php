<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_dlr_db";
//values posted by Mr SMS gateway
$status=$_POST['status'];
$messageId=$_POST['messageId'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE sms_log_tbl SET status='$status' WHERE static_status='$messageId'";

if ($conn->query($sql) === TRUE) {
   echo "ok";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
