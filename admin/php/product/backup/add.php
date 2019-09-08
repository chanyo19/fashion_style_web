
<?php



@session_start();

$str = "Hello world!";
//echo $str;


if (!isset($_SESSION['user_id'])) {

    header("Location: ../../index.php");

} else {

    $product_title = $_POST["product_title"];
	
	$dimensions = $_POST["dimensions"];
	
	$trim_length = $_POST["trim_length"];

    $menu1 = $_POST["menu1"];

    $is_new_arrival = $_POST["is_new_arrival"];
	
    $description = $_POST["description"];
	
    $best_seller = $_POST["best_seller"];


    echo $product_title;
	echo "<br>";
	echo $dimensions;
	echo "<br>";
	echo $trim_length;
	echo "<br>";
	echo $menu1;;
	echo "<br>";
	echo $is_new_arrival;
	echo "<br>";
	echo $description;
	echo "<br>";
	echo $best_seller;
	echo "<br>";
	
	
	include '../connect.php';
	
	echo $db_name;
	echo "<br/>";
	
	
	$sql = "INSERT INTO products (product_name, dimensions, trim_length, description, new_arrivals, best_sellers, main_cat)
VALUES ('$product_title', '$dimensions', '$trim_length', '$description', '$is_new_arrival', '$best_seller', '$menu1')";
	
    

    $result = mysql_query($sql);
	
	//$result = "Hello world!";
	
	//echo $result;
	//echo $sql;
	echo '<br/>';
	
		if(!$result ){
		die('Could not enter data: ' . mysql_error());
		}
		echo "Entered data successfully\n";
		
		echo "<br/>";
	
      $p_id = mysql_insert_id();
    
	echo $p_id; 




    mysql_close();
	
	    for ($i = 1; $i < 3; $i++) {

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

                    

                    $sql = "UPDATE products SET img_$i='$target_save_name' WHERE id=$p_id";

                    $result = mysql_query($sql);

                }

            } else {


            }

        }

    }



   header("Location: ../../dashboard.php"); /* Redirect browser */
	


}

?>