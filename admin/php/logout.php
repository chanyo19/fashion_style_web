<?php

session_start();



include("connect.php");
$id1 = $_GET['id'];

//echo $id1;

$sql = "UPDATE users SET active = 0 WHERE id = '$id1'";

$result2 = mysqli_query($conn,$sql);

if($result2){
header('Location: ../index.php');
	//echo "Good";
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}

// Close connection

session_destroy();

mysqli_close(); 
?>






