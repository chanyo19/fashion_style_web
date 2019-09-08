<?php
include("../connect.php");
    $id1 = $_GET['id'];

//echo $id1;

$sql = "UPDATE users SET status = 1 WHERE id = '$id1'";

if(mysqli_query($conn,$sql)){
header('Location: ../../user_view.php');
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}

// Close connection
mysqli_close($conn); 
?>

