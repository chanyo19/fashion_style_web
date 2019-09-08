<?php
include("../connect.php");
    $id1 = $_GET['id'];

//echo $id1;

$sql = "UPDATE main_category SET status = 0 WHERE cat_id = '$id1'";

if(mysqli_query($conn,$sql)){
header('Location: ../../category_view.php');
}
 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}

// Close connection
mysqli_close($conn); 
?>

