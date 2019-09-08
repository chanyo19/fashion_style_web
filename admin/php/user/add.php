<?php

@session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];
$status = $_POST["status"];
$date = date('Y-m-d H:i:s');

if(!isset($_SESSION['user_id'])){
 header("Location: ../../index.php");
}
else{
include '../connect.php';
$sql = "INSERT INTO users (username, password, role, status, last_log_date) VALUES('$username' , '$password', '$role', '$status', '$date')";
$result = mysqli_query($conn,$sql);
$id = mysqli_insert_id($conn);

mysqli_close($conn);


header("Location: ../../user_view.php"); /* Redirect browser */
}
