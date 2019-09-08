<?php
@session_start();

$str = "Hello world!";
//echo $str;


if (!isset($_SESSION['user_id'])) {

    header("Location: ../../index.php");

} else {

    $product_title = $_POST["product_title"];

    $menu1 = $_POST["menu1"];

    $is_new_arrival = $_POST["is_new_arrival"];
	
    $description = $_POST["description"];
	
	//$description = '<p>Test</p>';
	
    $best_seller = $_POST["best_seller"];
	
	if (is_null($is_new_arrival)){
		$is_new_arrival = 0;
	}
	
	if (is_null($best_seller)){
		$best_seller = 0;
	}
	

//	if ($best_seller)) {
//		$best_seller = 0;
//	} 

	$status = '1';

   // echo $product_title;
//	echo "<br>";
//	echo $menu1;;
//	echo "<br>";
//	echo $is_new_arrival;
//	echo "<br>";
//	echo $description;
//	echo "<br>";
//	echo $best_seller;
//	echo "<br>";
//	echo $status;
//	echo "<br>";
	
	
	
	include '../connect.php';
	
	//echo $db_name;
	//echo "<br/>";
	
	
	$sql = "INSERT INTO products (product_name, description, new_arrivals, best_sellers, main_cat, status)
VALUES ('$product_title', '$description', '$is_new_arrival', '$best_seller', '$menu1', '$status')";
	
    

    $result = mysqli_query($conn,$sql);
	
	//$result = "Hello world!";
	
	//echo $result;
	//echo $sql;
	$p_id = mysqli_insert_id($conn);
	    mysqli_close($conn);
	//echo '<br/>';
	
		if(!$result ){
		die('Could not enter data: ' . mysqli_error());
		}
		//echo "Entered data successfully\n";
		
		//echo "<br/>";
	
    
    
	//echo $p_id; 





	
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

                    

                    $sql3 = "UPDATE products SET img_$i='$target_save_name' WHERE id=$p_id";

                    $result2 = mysqli_query($conn,$sql3);
					


                }

            } 
			

        }

    }



header("Location: ../../dashboard.php"); /* Redirect browser */
	


}

?>