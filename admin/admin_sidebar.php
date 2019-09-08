<div class="sidebar-nav" style="margin-top: 15px;">
<div align="center"><a href="dashboard.php"></a><img src="images/logo.png" class="img-responsive" width="200" /> </a> </div>
    <ul>
		
       
       <?php
		
		//echo $role;
		
		
		
		if($_SESSION['role']=='admin'){
		
		?>
      <br/>
      <li><a href="#" data-target=".user-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Users<i class="fa fa-collapse"></i></a></li>
      
      <li><ul class="user-menu nav nav-list collapse">

                 <li ><a href="user_view.php"><span class="fa fa-caret-right"></span> View All Users</a></li>
               
                <li ><a href="user_add.php"><span class="fa fa-caret-right"></span> Add User</a></li>              

                

            </ul></li>
            
              
            
            
       
        <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>

        <li><ul class="dashboard-menu nav nav-list collapse in">

                <li><a href="dashboard.php"><span class="fa fa-caret-right"></span> Main</a></li>                

               <!-- <li ><a href="#"><span class="fa fa-caret-right"></span> <?php //echo $_SESSION['user_name'].'\'s ' ?> Profile</a></li>-->

            </ul></li>
            
             <li><a href="#" data-target=".products-menu" class="nav-header collapsed" data-toggle="collapse"> Products <i class="fa fa-collapse"></i></a></li>

        <li>

            <ul class="products-menu nav nav-list collapse">

                <li ><a href="product_add.php"><span class="fa fa-caret-right"></span> Add Products</a></li>
                

                

            </ul>

        </li>
        
        <li><a href="#" data-target=".category-menu" class="nav-header collapsed" data-toggle="collapse"> Category <i class="fa fa-collapse"></i></a></li>

        <li>

            <ul class="category-menu nav nav-list collapse">
				
              
                <li ><a href="category_view.php"><span class="fa fa-caret-right"></span> View All Categories</a></li>
               
                <li ><a href="main_cat_add.php"><span class="fa fa-caret-right"></span> Add Category</a></li>
                

                

            </ul>

        </li>
        
        <li><a href="#" data-target=".view_product_by_category-menu" class="nav-header collapsed" data-toggle="collapse"> View Products By Category <i class="fa fa-collapse"></i></a></li>

        <li>
        
         <li>

            <ul class="view_product_by_category-menu nav nav-list collapse">

               <?php
                            include 'php/connect.php';

                            $result = mysqlI_query($conn,"SELECT * FROM main_category WHERE status = 1");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $main_cat_name = $row['main_cat_name'];
								$p_id = $row['cat_id'];
                                ?>
                                
                <li ><a href="view_product_by_category.php?id=<?php echo $row['cat_id'] ?>"><span class="fa fa-caret-right"></span> <?php echo $main_cat_name; ?></a></li>
                
 <?php
											 
							}
						   
						   ?>
                

            </ul>

        </li>

       <?php
	
		}else{
	
	?>
        
        <li><a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i> Dashboard<i class="fa fa-collapse"></i></a></li>

        <li><ul class="dashboard-menu nav nav-list collapse in">

                <li><a href="dashboard.php"><span class="fa fa-caret-right"></span> Main</a></li>                

                <li ><a href="#"><span class="fa fa-caret-right"></span> <?php echo $_SESSION['user_name'].'\'s ' ?> Profile</a></li>

            </ul></li>
        
        
        

        <li><a href="#" data-target=".products-menu" class="nav-header collapsed" data-toggle="collapse"> Products <i class="fa fa-collapse"></i></a></li>

        <li>

            <ul class="products-menu nav nav-list collapse">

                <li ><a href="product_add.php"><span class="fa fa-caret-right"></span> Add Products</a></li>
                

                

            </ul>

        </li>
        
        <li><a href="#" data-target=".category-menu" class="nav-header collapsed" data-toggle="collapse"> Category <i class="fa fa-collapse"></i></a></li>

        <li>

            <ul class="category-menu nav nav-list collapse">
				
              
                <li ><a href="category_view.php"><span class="fa fa-caret-right"></span> View All Categories</a></li>
               
                <li ><a href="main_cat_add.php"><span class="fa fa-caret-right"></span> Add Category</a></li>
                

                

            </ul>

        </li>
        
        <li><a href="#" data-target=".view_product_by_category-menu" class="nav-header collapsed" data-toggle="collapse"> View Products By Category <i class="fa fa-collapse"></i></a></li>

        
         <li>

            <ul class="view_product_by_category-menu nav nav-list collapse">

               <?php
                            include 'php/connect.php';

                            $result = mysqli_query($conn,"SELECT * FROM main_category WHERE status = 1");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $main_cat_name = $row['main_cat_name'];
								$p_id = $row['cat_id'];
                                ?>
                                
                <li ><a href="view_product_by_category.php?id=<?php echo $row['cat_id'] ?>"><span class="fa fa-caret-right"></span> <?php echo $main_cat_name; ?></a></li>
                
 <?php
											 
							}
						   
						   ?>
                

            </ul>

        </li>
        
        
        
        

			<!--<li><a href="#" data-target=".skin-menu" class="nav-header collapsed" data-toggle="collapse"> Women <i class="fa fa-collapse"></i></a></li>-->

      <!--  <li>

            <ul class="skin-menu nav nav-list collapse">
                
                <li ><a href="product_view_women.php"><span class="fa fa-caret-right"></span> View Products</a></li>
                  <li ><a href="product_view_women.php"><span class="fa fa-caret-right"></span> Party Dresses</a></li>
                    <li ><a href="product_view_women.php"><span class="fa fa-caret-right"></span> Club Dresses</a></li>
                      <li ><a href="product_view_women.php"><span class="fa fa-caret-right"></span> Cocktail Dresses</a></li>

            </ul>

        </li>-->
		

        <?php
			
		}
			?>
    
    <li class="hidden-md hidden-lg"><a href="#" data-target=".user-account" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-user"></i> Account<i class="fa fa-collapse"></i></a></li>
      
      <li><ul class="user-account nav nav-list collapse">

                 <li ><a href="php/logout.php?id=<?php echo $_SESSION['user_id']; ?>"><span class="fa fa-caret-right"></span> Logout</a></li>             

           
            </ul></li>

    </ul>

</div>