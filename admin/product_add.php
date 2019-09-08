<?php include 'header.php'; ?>

	
<script src="lib/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
		
		
		
		

<div class="content">
    <div class="header">
        <div class="stats">

        </div>

        <h1 class="page-title">Products</h1>
        <ul class="breadcrumb">
            <li class="active">Add New Products</li>
        </ul>

    </div>
    <div class="main-content">
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-12 panel panel-default" style="padding: 0px;">
                    <div class="panel-heading no-collapse">Add New Products<span class="label label-warning"></span></div>


                    <form class="panel-text" id="form_1" action="php/product/add.php" method="post" enctype="multipart/form-data">
                       
                        <div class="form-group col-md-6">
                            <label>Product Name (CODE)</label>
                            <input type="text" name="product_title" value="" class="form-control" required>
                        </div>
						
                        						<?php

include("php/connect.php");

$query="SELECT * FROM main_category";
$result=mysqli_query($conn,$query);
?>
                        
                    <div class="form-group col-md-6">
                            <label>Main Category</label>
            <select name="menu1" id="menu1" class="form-control" required>
            <option value="">Select Menu</option>
	<?php while ($row=mysqli_fetch_array($result)) { ?>
    <option value="<?php echo $row['cat_id']?>"><?php echo $row['main_cat_name']?></option>

	<?php } ?>
            </select>
	</div>


   


         
         <div class="clearfix"></div>
         
          <!--<div class="form-group col-md-4">   
                        <label>Dimensions</label>
                            <input type="text" name="dimensions" value="" class="form-control" required>
                        </div>
                        
                         <div class="form-group col-md-4">   
                        <label>Trim Length</label>
                            <input type="text" name="trim_length" value="" class="form-control" required>
                        </div>-->
					
                       <div class="form-group col-md-12">   
                        <label>Description</label>
                       <textarea name="description" style="width: 100%" cols="10" rows="10"></textarea> 
                       
                        </div>
                           
 
                            
                            
                         <div class="form-group col-md-12">   
                        <input type="checkbox" name="is_new_arrival" value="1">
                           
                            <label>New Arrival?</label>
                        </div> 
						
						
						<div class="form-group col-md-12">

                            <input type="checkbox" name="best_seller" value="1">
                             
                            
                            <label>Best Seller?</label>
                        </div> 
						

                        <p class="form-group col-md-12" style="color:#003399; border-bottom: solid 1px #003399;">Product Images</p>
                        <hr>

                        <div class="form-group col-md-4">
                            <label>Image <span style="color: #FB0004; font-weight: bold;">(Width - 640 Height - 480)</span></label>
                            <img style="width: 252px;" "height:167px" id="img_1" src="#" alt="" onerror="if (this.src != 'images/icons/upload_page_icon.png') this.src = 'images/icons/upload_page_icon.png';" />
                            <input name="img_1" class="form-control uploadImage" required type="file" onchange="readURL(this, 'img_1');" />
                        </div>
                        
                        <!--<div class="form-group col-md-4">
                            <label>Image 2</label>
                            <img style="width: 252px;" "height:167px" id="img_2" src="#" alt="" onerror="if (this.src != 'images/icons/upload_page_icon.png') this.src = 'images/icons/upload_page_icon.png';" />
                            <input name="img_2" class="form-control uploadImage" required type="file" onchange="readURL(this, 'img_2');" />
                        </div>-->

                 
                        
                        <div class="form-group col-md-12">

                            <button class="btn btn-primary submit_btn" name="submit"><i class="fa fa-save"></i> Add</button>
                        </div>

                    </form>

                </div>

            </div>


        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {

        $('.variation_box').hide();
        $(".is_variation").click(function () {

            var checked_status = $(this).is(":checked");
            //alert(checked_status);
            if (checked_status) {
                $('.variation_box').show();
            } else {
                $('.variation_box').hide();
            }
        });

        $(".delete_btn").click(function () {
            //alert('hi');
            var b_id = $(this).data('bid');
            //alert(b_id);
            var r = confirm("Are you sure to delete this?");
            if (r) {
                window.location.href = "php/brand/delete.php?b_id=" + b_id;
            }
        });

    });

    function readURL(input, ids) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#' + ids).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<?php include 'footer.php'; ?>