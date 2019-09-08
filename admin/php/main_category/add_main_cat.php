<?php

@session_start();

$main_cat_name = $_POST["category_name"];
$status = 1;


if(!isset($_SESSION['user_id'])){
 header("Location: ../../index.php");
}
else{
include '../connect.php';
$sql = "INSERT INTO main_category (main_cat_name, status) VALUES('$main_cat_name' , '$status')";
$result = mysqli_query($conn,$sql);
$id = mysqli_insert_id($conn);

mysqli_close($conn);


header("Location: ../../category_view.php"); /* Redirect browser */
}
