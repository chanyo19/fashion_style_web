

<?php $main1=intval($_GET['main']);
include("php/connect.php");

$query="SELECT * FROM sub_category WHERE cat_id='$main1'";
$result=mysql_query($query);

?>
<select name="sub_menu" onchange="getMenulist(<?php echo $main1;?>,this.value)" class="form-control">
<option>Select Submenu</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['sub_cat_id']?>><?php echo $row['sub_cat_name']?></option>

<?php } ?>
<input type="hidden" name="menu" value="<?php echo $row['menu'] ?>"/>
</select>
