<?php


@session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
} else {
    $p_id = $_GET["id"];
    
    $username = $_POST["username"];
	
	
	
    $password = $_POST["password"];
	 
	
    $role = $_POST["role"];
	
    $status = $_POST["status"];
	
	$date = date('Y-m-d H:i:s');
	

	//$status = '1';
  

    include '../connect.php';
	
	$sql = "UPDATE users SET username='$username', password='$password', role='$role', status='$status', last_log_date='$date', status='$status' WHERE id='$p_id'";
	

    $result = mysqli_query($conn,$sql);

mysqli_close($conn);

header("Location: ../../user_view.php"); /* Redirect browser */
}
