<?php
 include("connect.php");

session_start();
$psw=$_POST['password'];
$id1=$_POST['id'];





if(isset($_POST['submit'])){

$sql = "UPDATE admin_user SET password='$psw' WHERE id='$id1'";

	 if(mysqli_query($conn,$sql)){

	 
header("Location: ../user_add.php"); /* Redirect browser */

}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error();
}	
}
?>

