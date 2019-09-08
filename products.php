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
        <div class="site-content-inner">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    
                    
                       
        <section id="section11" >
            <!-- Category Block  -->
            <div class="container">
                <div class="row">
                    <!-- Sidebar content -->
                    <div id="secondary" class="sidebar shop-sidebar-area sidebar-inpage col-xs-12 col-sm-4 col-md-3 sidebar-right">
                        <!-- Widget Categories -->
                        <div class="widget widget_categories">
                            <h4 class="title-sidebar">Product Categories</h4>
                            <ul class="product-categories">
                                
                                 <?php
                            include 'admin/php/connect.php';

                            $result = mysqli_query($conn,"SELECT * FROM main_category WHERE status = 1");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $main_cat_name = $row['main_cat_name'];
								$p_id = $row['cat_id'];
                                ?>   
                                
                                
                                <li class="cat-item "><a href="products.php?id=<?php echo $row['cat_id'] ?>"><?php echo $main_cat_name; ?></a> </li>
                                
                                 <?php
											 
							}
						   
						   ?>
								
                            </ul>
                        </div>
                        <!--End Widget Categories -->

                        <!-- Widget media image -->
                       <!-- <div class="xshop-owl-carousel nav-control-style4 home_side_banner" data-number="2" data-navControl="yes" data-margin="30" data-autoPlay="yes">
                            <div class="product-item">
                                <a href="#"><img src="assets/images/img-b.jpg" alt=""></a>
							</div>
                       <div class="product-item">
                                <a href="#"><img src="assets/images/img-b1_1.jpg" alt=""></a>
							</div>
                        <div class="product-item">
                                <a href="#"><img src="assets/images/img-b1_2.jpg" alt=""></a>
							</div>
                        </div>-->
                        <!--End Widget media image -->
                    </div>
                    <!-- End Sidebar content -->
                    <!-- Main content -->
                    
                    
                    
                    
               
                    
                    
                    <div id="primary" class="content-area col-xs-12 col-sm-8 col-md-9 has-sidebar-left wow fadeIn" data-wow-delay="0.6s">
                        <div id="main" class="site-main">
                            <div class="products row columns-3 products-grid products-wraps">
                               
                                                      
<?php
 
								
$p_id = $_GET['id'];
								

								
// define how many results you want per page
$results_per_page = 9;

// find out the number of results stored in database
$sql="SELECT * FROM products WHERE main_cat='$p_id'";
$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;
						
						// retrieve selected results from database and display them on page
$sql='SELECT * FROM products WHERE main_cat='. $p_id .' and status = 1 LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($conn, $sql);
						
						
						while($row = mysqli_fetch_array($result)) {
							
							$new_arrivals = $row['new_arrivals'];
							
							$best_sellers = $row['best_sellers'];
							
							
							?>
							
							<div class="product-item product-hover-style2">
                                    <div class="product-media">
                                        <div class="product-images-wrap">
                                            <figure class="product-first-figure" style="border: 2px solid #dcdcdc; ">
                                                <a href="product_inner.php?id=<?php echo $row['id'] ?>">
            <img alt="img" width="auto" height="auto" src="admin/images/products/<?php echo $row['img_1']; ?>">
                                              
                                                </a>
                                            </figure>
                                            <?php if ($new_arrivals == '1' ) 
			echo '<span class="new-product">New</span>' ; ?>
                                            
                                             <?php if ($best_sellers == '1' ) 
			echo '<span class="onsale">Best Selling</span>' ; ?>
                                             
                                             
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="#"><?php echo $row['product_name']; ?></a></h3>
                                       
                                    </div>
                                    
                                    
                                    
                                </div>
                                
                                <?php

}


?>
    
                               
                                
                            </div>
                       
                           
                            <nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
							
							// display the links to the pages
for ($page=1;$page<=$number_of_pages;$page++) {
  //echo '<a href="products.php?page=' . $page . '">' . $page . '</a> ';


							?>
    <li class="page-item">
     
    <a class="page-link" <?php echo '<a href="products.php?page=' . $page . '">'  ?> 
    
    <?php echo $page; ?></a></li>
    
     <?php
	
	}
          ?>  
    
  </ul>
</nav>
         
                    </div>
                    </div>
                    <!-- End Main content -->
                </div>
            </div>
            <!--End  Category Block  -->
        </section>
       
                    
                    
                    <!-- End Main content -->
                </div>
            </div>
        </div>
    </div>



<?php

	include 'footer4.php';

?>


