<?php include 'header.php'; ?>


<div class="content">
    <div class="header">
        <div class="stats">

        </div>

        <h1 class="page-title">Products</h1>

    </div>
    <div class="main-content">
	
     <div class="row">

            <div class="col-md-12">

                <div class="col-md-12 panel panel-default" style="padding: 0px;">
                    <div class="panel-heading no-collapse">Edit Product<span class="label label-warning"></span></div>

<?php

$p_id = $_GET['id'];
					
//echo $p_id;					
					
include("php/connect.php");
 //$sql= "SELECT * FROM products WHERE id='$p_id'";
 $sql= "SELECT p.*, m.* FROM products as p INNER JOIN main_category as m ON m.cat_id=p.main_cat WHERE id='$p_id'";
 
if($result = mysql_query($sql)){
			
?>
     
                      
						


                    <form id="form_1" action="php/product/edit.php?id=<?php echo $p_id; ?>" method="post" enctype="multipart/form-data">
                
                  <?php
 if(mysql_num_rows($result) > 0){
while($row = mysql_fetch_array($result)){
	
	
	
	$cat_id =  $row['cat_id'];
	

?>    

  
                    
                        <div class="form-group col-md-6">
                            <label>Product Name</label>
                            <input type="text" name="product_name" value="<?php echo $row['product_name'] ?>" class="form-control">
                        </div>
						
                      
                    <div class="form-group col-md-6">
                    <label>Main Category</label>
                    <select name="main_category" id="main_category" class="form-control">
            <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['main_cat_name']; ?></option>
            
            <?php

include("php/connect.php");

$query2="SELECT * FROM main_category";
$result2=mysql_query($query2);
?>

<?php while ($row2=mysql_fetch_array($result2)) { ?>
    <option value="<?php echo $row2['cat_id']?>"><?php echo $row2['main_cat_name']?></option>

	<?php } ?>
	
            </select>
                    
                    </div>


			
 <div class="clearfix"></div>
         
          <div class="form-group col-md-4">   
                        <label>Trim Length </label>
                            <input type="text" name="dimensions" value="<?php echo $row['trim_length']; ?>" class="form-control" required>
                        </div>
                        
                        <div class="form-group col-md-4">   
                        <label>Product Dimensions </label>
                            <input type="text" name="dimensions" value="<?php echo $row['dimensions']; ?>" class="form-control" required>
                        </div>
                
					
                       <div class="form-group col-md-4"> 
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="5"><?php echo $row['description']; ?></textarea>
                        </div>
                            
                            
                            
                         <div class="form-group col-md-12">   
                        <!--<input type="checkbox" name="is_new_arrival" value="1">-->
                        <!--<input type="checkbox" name="is_new_arrival[]" value="1" <?php //if (strpos($row['new_arrivals'],'1') !== false) echo 'checked="checked"'; ?>>-->
                        <input type="hidden" name="is_new_arrival" value="0">
                        <input type="checkbox" name="is_new_arrival" value="1" <?php echo ($row['new_arrivals'] == 1) ? 'checked="checked"' : ''; ?>/>
                        
                            <label>New Arrival?</label>
                        </div> 
						
						
						<div class="form-group col-md-12">

<!--                            <input type="checkbox" name="best_seller[]" value="1" <?php // if (strpos($row['best_sellers'],'1') !== false) echo 'checked="checked"'; ?>>-->
                            
                            <input type="hidden" name="best_seller" value="0">
                            <input type="checkbox" name="best_seller" value="1" <?php echo ($row['best_sellers'] == 1) ? 'checked="checked"' : ''; ?>/>
                            
                            <label>Best Seller?</label>
                        </div> 
						

                        <p class="form-group col-md-12" style="color:#003399; border-bottom: solid 1px #003399;">Product Images</p>
                        <hr>

                        <div class="form-group col-md-4">
                            <label>Image 1</label>
                            <img style="width: 252px;" "height:167px" id="img_1" src="#" alt="" onerror="if (this.src != 'images/icons/upload_page_icon.png') this.src = 'images/products/<?php echo $row['img_1'] ?>';" />
                            <input name="img_1" class="form-control uploadImage" type="file" onchange="readURL(this, 'img_1');" />
                        </div>

                  <div class="form-group col-md-4">
                            <label>Image 2</label>
                            <img style="width: 252px;" "height:167px" id="img_2" src="#" alt="" onerror="if (this.src != 'images/icons/upload_page_icon.png') this.src = 'images/products/<?php echo $row['img_2'] ?>';" />
                            <input name="img_2" class="form-control uploadImage" type="file" onchange="readURL(this, 'img_2');" />
                        </div>

                       

                        <div class="form-group col-md-12">

                            <button class="btn btn-primary submit_btn" name="submit"><i class="fa fa-save"></i> Add</button>
                        </div>

<?php
						}
						}
						?>
                        
                    </form>

<?php
		
		}
		?>


                </div>

            </div>


        </div>
		
		
    </div>
</div>


<?php include 'footer.php'; ?>