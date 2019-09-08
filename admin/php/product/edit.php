<?php

@session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
} else {
    $p_id = $_GET["id"];
    
    $product_name = $_POST["product_name"];
	
	
	
    $main_category = $_POST["main_category"];
	 
	
    $is_new_arrival = $_POST["is_new_arrival"];
	
    $description = $_POST["description"];
	
    $best_seller = $_POST["best_seller"];
	
	if (is_null($is_new_arrival)){
		$is_new_arrival = 0;
	}
	
	if (is_null($best_seller)){
		$best_seller = 0;
	}

	$status = '1';
  

    include '../connect.php';
	
	$sql = "UPDATE products SET product_name='$product_name', description='$description', new_arrivals='$is_new_arrival', best_sellers='$best_seller', main_cat='$main_category', status='$status' WHERE id='$p_id'";
	

    $result = mysqli_query($conn,$sql);
    
  


    mysqli_close($conn);

    for ($i = 1; $i < 2; $i++) {
        if ($_FILES["img_" . $i]['error'] == 0) {
            $allowedExts = array("gif", "jpeg", "jpg", "png", "JPEG");
            $temp = explode(".", $_FILES["img_" . $i]["name"]);
            $extension = end($temp);

            if ((($_FILES["img_" . $i]["type"] == "image/gif") || ($_FILES["img_" . $i]["type"] == "image/jpeg") || ($_FILES["img_" . $i]["type"] == "image/JPEG") || ($_FILES["img_" . $i]["type"] == "image/jpg") || ($_FILES["img_" . $i]["type"] == "image/pjpeg") || ($_FILES["img_" . $i]["type"] == "image/x-png") || ($_FILES["img_" . $i]["type"] == "image/png")) && ($_FILES["img_" . $i]["size"] < 500000) && in_array($extension, $allowedExts)) {
                if ($_FILES["img_" . $i]["error"] > 0) {
                    echo "Return Code: " . $_FILES["img_" . $i]["error"] . "<br>";
                    return;
                } else {
                    $info = pathinfo($_FILES["img_" . $i]['name']);
                    $ext = $info['extension']; // get the extension of the file
                    $newname = $p_id . "_" . $i . "." . $ext;
                    $target = '../../images/products/' . $newname;
                    $target_save_name = '' . $newname;

                    move_uploaded_file($_FILES["img_" . $i]["tmp_name"], $target);
                    // echo "Stored in: upload/" . $target;
                    //  echo '<img src="' . $target . '"/>';
                    include '../connect.php';
                    
                    $sql = "UPDATE product SET img_$i='$target_save_name' WHERE id=$p_id";
                    $result = mysqli_query($conn,$sql);
                }
            } else {
                echo "Invalid file";
            }
        }
    }

    header("Location: ../../dashboard.php"); /* Redirect browser */
}

?>
