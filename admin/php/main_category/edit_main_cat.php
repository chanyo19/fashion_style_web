<?php

@session_start();

$main_cat_name = $_POST["category_name"];
$status = 1;


if(!isset($_SESSION['user_id'])){
 header("Location: ../../index.php");
}
else{
include '../connect.php';
    $sql = "UPDATE main_category SET main_cat_name='$product_name', description='$description', new_arrivals='$is_new_arrival', best_sellers='$best_seller', main_cat='$main_category', status='$status' WHERE id='$p_id'";
$result = mysqli_query($conn,$sql);
$id = mysqli_insert_id($conn);

mysqli_close($conn);


header("Location: ../../category_view.php"); /* Redirect browser */
}
