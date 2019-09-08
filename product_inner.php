<?php


	include 'header4.php';

?>




<!-- Header Banner -->
        <div class="header-banner banner-image"><!-- Banner Img -->
            <div class="banner-wrap">
                <div class="banner-overlay-color" style="background-color: rgba(0,0,0,0.4)"></div>
                <div class="banner-header" style="background-image: url(assets/images/img1.jpg); min-height:250px;" >
                    <div class="banner-content">
                        <h3 class="title-page" data-color="#333333">We Have the best Products</h3>
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>Our Products</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Banner -->
    </header>
    
    
    <div class="main-content">
        <div class="site-content-inner detail-product">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-9" style="padding-bottom: 0px;">
                        <div id="main" class="site-main">
                            <div class="product-single">
                                <div class="product-content-single">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single-product-media">
                                             
                                               
<?php

$p_id = $_GET['id'];
					
//echo $p_id;					
					
include("admin/php/connect.php");
 //$sql= "SELECT * FROM products WHERE id='$p_id'";
 $sql= "SELECT p.*, m.* FROM products as p INNER JOIN main_category as m ON m.cat_id=p.main_cat WHERE id='$p_id'";
 
if($result = mysqli_query($conn,$sql)){
	
	
			
?>
     
                                          <?php
 if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
	
	
	
	$cat_id =  $row['cat_id'];
	$product_name = $row['product_name'];
	
	$description = $row['description'];
	

?>  
                                                                     
                                                <div class="images product-img">
                                                    <a href="#" class="image-feature">
                                                        <img src="admin/images/products/<?php echo $row['img_1'] ?>" alt="img">
                                                    </a>
                                                </div>
                                             
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-product-content">
                                                <h5 class="product-title" style="font-size: 25px; font-weight: bold;"><?php echo $product_name; ?></h5>
                                                
                                                
                                                <div class="product-desc">
                                                 <?php echo $description;  ?>

                                                </div>
                                             
                                               
                                                   
    <?php
}
						}
						}
						?>
    
                                               
                                                <form action="#" method="post" class="cart">
                                                   
                                                    <button class="button-duck button-medium" type="submit">Inquire this Product</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
							</div>
                              
                              </div>
                              
                              </div>
                              
                              <!-- Sidebar content -->
                    <div id="secondary" class="sidebar shop-sidebar-area sidebar-inpage col-xs-12 col-sm-4 col-md-3 sidebar-right" style="padding-top: 40px; padding-bottom: 0px;">
                        <!-- Widget Categories -->
                        <div class="widget widget_categories">
                            <h4 class="title-sidebar" style="margin-bottom: 20px;">Product Categories</h4>
                            <ul class="product-categories">
                                
                                 <?php
                            include 'admin/php/connect.php';

                            $result = mysqli_query($conn,"SELECT * FROM main_category WHERE status = 1");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $main_cat_name = $row['main_cat_name'];
								$p_id = $row['cat_id'];
                                ?>  
                                
                                
                                <li class="cat-item" style="padding-bottom: 10px; padding-top: 10px;">
                                <a href="products.php?id=<?php echo $row['cat_id'] ?>">
                                <?php echo $main_cat_name; ?></a> </li>
                                
                                 <?php
											 
							}
						   
						   ?>
                                
                            </ul>
                        </div>
                        <!--End Widget Categories -->

                        <!--End Widget media image -->
                    </div>
                                
						
                               
                               
                               
                               </div>
                               
                                 <div class="row">
                                
                                <div class="products-relate">
                                    <h4 class="title-single-product">Related Products</h4>
                                   <br/>
                                    <div class="products xshop-owl-carousel products-grid products-wraps" data-number="4" data-margin="30">
                                      
                          <?php 


								
include("admin/php/connect.php");
 //$sql= "SELECT * FROM products WHERE id='$p_id'";
 $sql2= "SELECT * FROM products WHERE main_cat='$cat_id' AND status = '1'";
								
//echo $cat_id;
 
if($result2 = mysqli_query($conn,$sql2)){		
	
	while ($row2=mysqli_fetch_array($result2)) { 

	?>
                                       
                                       
                                       <div class="product-item product-hover-style2">
                                    <div class="product-media">
                                        <div class="product-images-wrap">
                                            <figure class="product-first-figure" style="border: 2px solid #dcdcdc; ">
                                                <a href="product_inner.php?id=<?php echo $row2['id'] ?>">
            <img alt="img" width="auto" height="auto" src="admin/images/products/<?php echo $row2['img_1'] ?>">
                                              
                                                </a>
                                            </figure>
                                            <span class="new-product">New</span>
                                        </div>
                                    </div>
                                    <div class="product-info">
           <h3 class="product-name"><a href="product_inner.php?id=<?php echo $row2['id'] ?>">
                                        <?php echo $row2['product_name']; ?></a></h3>
                                       
                                    </div> 
                                </div>
                                   
                                   
                                    <?php
											  
	}
							}
						   
						   ?>
                                   
                                  
                                       
                                       
                                       
                                      
                                       
                                       
                                        
                                    
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                     
                    
                    
                    <!-- End Main content -->
                </div><!-- / End row content -->
            </div>
        </div>
    </div>



<?php

	include 'footer4.php';

?>


