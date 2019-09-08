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
 $sql= "SELECT * FROM main_category WHERE cat_id='$p_id'";
 
if($result = mysqli_query($conn,$sql)){
			
?>
     
                      
						


                    <form id="form_1" action="php/product/edit.php?id=<?php echo $p_id; ?>" method="post" enctype="multipart/form-data">
                
                  <?php
 if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){

	$cat_id =  $row['cat_id'];

?>    

  
                    
                        <div class="form-group col-md-6">
                            <label>Main Category Name</label>
                            <input type="text" name="category_name" value="<?php echo $row['main_cat_name'] ?>" class="form-control">
                        </div>
						
                      
              


			
 <div class="clearfix"></div>
         

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