<?php

$local_conn = 1;

if ($local_conn) {
//intialize the connections for localhost
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "chandimal";
	//echo "connected";
} 
else {
    //intialize the connections for web
    $db_host = "localhost";
    $db_username = "";
    $db_password = "";
    $db_name = "";
	//echo "connected";
	
}

//make the connection
$conn = @mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("could not connect");
//mysql_select_db($db_name);

//echo $db_name;		
?>