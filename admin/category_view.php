<?php include 'header.php'; ?>

<div class="content">
    <div class="header">
        <div class="stats">

        </div>

        <h1 class="page-title">Category</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li class="active">View Categories</li>
        </ul>

    </div>
    <div class="main-content">





        <div class="panel panel-default">
            <a href="#page-stats" class="panel-heading" data-toggle="collapse">Latest Stats</a>
            <div id="page-stats" class="panel-collapse panel-body collapse in">

                <div class="row">
<div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead >
                                    <tr >
                                       <th>ID</th>
                                        <th>Category Name</th>
                                        
<!--                                        <th>Edit</th>-->
                                        <th>Active / Inactive</th>
                                    </tr>
                                </thead>

                                <tbody>
                                
                                 <?php
                            include 'php/connect.php';

                            $result = mysqli_query($conn,"SELECT * FROM main_category");
                            while ($row = mysqli_fetch_assoc($result)) {
                                $main_cat_name = $row['main_cat_name'];
								$p_id = $row['cat_id'];
								$status = $row['status'];
								
								$cat_id = $row['cat_id'];
								
								$active = 1;
								$deactive = 0;
								
                                ?>
                                
                                    <tr>
            <td align="center"><?php echo $p_id; ?></td>
            <td align="center"><?php echo $main_cat_name; ?></td>
 			 
           
<!--			<td> <a href="main_cat_edit.php?id=--><?php //echo $row['cat_id'] ?><!--"><img src="images/eye.png"></a></td>-->
			
			<td align="center"><?php if ($status == '1' ) 
			echo '<a href="php/main_category/main_cat_active.php?id='.$cat_id.'" ><button type="button" class="btn btn-success">Active</button></a>' ; ?> 
          
          <?php if ($status == '0' )
		echo '<a href="php/main_category/main_cat_inactive.php?id='.$cat_id.'" ><button type="button" class="btn btn-danger">Inactive</button></a>' ; ?></td>
			
			
                                        
                                    </tr>
                           <?php
											 
							}
						   
						   ?>
                                </tbody>
                            </table>
                        </div>

                   

                    
                </div>
            </div>
        </div>

        

        


        <footer>
            <hr>


        </footer>
    </div>
</div>
<?php include 'footer.php'; ?>