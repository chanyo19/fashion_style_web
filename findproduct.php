
<?php $main1=intval($_GET['main']);
include("admin/php/connect.php");
$status = 1;

$sql2= "SELECT * FROM products WHERE main_cat='$main1' AND status = '$status'";

$result = mysqli_query($conn,$sql2);


?>
<select name="sub_menu" style="width: 100%; height: 50px; margin-top: -25px;" onchange="getMenulist(<?php echo $main1;?>,this.value)" class="form-control">

    <?php while ($row=mysqli_fetch_array($result)) { ?>
        <option value=<?php echo $row['id']?>><?php echo $row['product_name']?></option>

    <?php } ?>
    <input type="hidden" name="menu" value="<?php echo $row['menu'] ?>"/>
</select>
