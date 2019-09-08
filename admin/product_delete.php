<?php
include("php/connect.php");
    $id1 = $_GET['id'];



$sql = "UPDATE products SET status = 0 WHERE id = '$id1'";

if(mysqli_query($conn,$sql)){
header('Location: dashboard.php');
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}

// Close connection
mysqli_close($conn); 
?>
