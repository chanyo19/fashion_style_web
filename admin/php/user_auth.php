<?php



@session_start();

include("connect.php");


$username = $_POST['username'];

$password = $_POST['password'];





// To protect MySQL injection (more detail about MySQL injection)

$username = stripslashes($username);

$password = stripslashes($password);

$username = mysqli_real_escape_string($conn,$username);

$password = mysqli_real_escape_string($conn,$password);



//$password = md5($password);

//echo $password;

//return;

$status = '1';


$sql = "SELECT * FROM users WHERE username='$username' and password='$password' and status='$status'";

$result = mysqli_query($conn,$sql);



// Mysql_num_row is counting table row

$count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

$row = mysqli_fetch_assoc($result);

$user_name = $row['username'];

$user_id = $row['id'];

$role = $row['role'];

$active = $row['active'];

//echo $count1 = mysql_num_rows($result1);

if ($count == 1) {

   $_SESSION['user_id'] = $user_id;  

   $_SESSION['user_name'] = $user_name;  
	
	 $_SESSION['role'] = $role; 
	
	$_SESSION['active'] = $active; 
	
	
	$sql2 = "UPDATE users SET active = 1 WHERE id = '$user_id'";

	$result2 = mysqli_query($conn,$sql2);
	

if($result2){
	
 header("Location: ../dashboard.php");
	
	
	
	
}
	

       

    

} else {

    $_SESSION['error'] = "Invalid username/password";

    header("Location: ../index.php");

}