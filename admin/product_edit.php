<?php include 'header.php'; ?>
	
<script src="lib/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

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
 
if($result = mysqli_query($conn,$sql)){
			
?>
     
                      
						


                    <form id="form_1" action="php/product/edit.php?id=<?php echo $p_id; ?>" method="post" enctype="multipart/form-data">
                
                  <?php
 if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
	
	
	
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
$result2=mysqli_query($conn,$query2);
?>

<?php while ($row2=mysqli_fetch_array($result2)) { ?>
    <option value="<?php echo $row2['cat_id']?>"><?php echo $row2['main_cat_name']?></option>

	<?php } ?>
	
            </select>
                    
                    </div>


			
 <div class="clearfix"></div>
         
         
                        
                      
                
					
                       <div class="form-group col-md-4"> 
                        <label>Description</label>
<textarea name="description" style="width: 100%" cols="10" rows="10"><?php echo $row['description']; ?></textarea>
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
                             <label>Image <span style="color: #FB0004; font-weight: bold;">(Width - 640 Height - 480)</span></label>
                            <img style="width: 252px;" "height:167px" id="img_1" src="#" alt="" onerror="if (this.src != 'images/icons/upload_page_icon.png') this.src = 'images/products/<?php echo $row['img_1'] ?>';" />
                            <input name="img_1" class="form-control uploadImage" type="file" onchange="readURL(this, 'img_1');" />
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