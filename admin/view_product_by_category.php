<?php include 'header.php';

//echo 'header';

?>

<link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

<div class="content">
    <div class="header">
        <div class="stats">

        </div>

        <h1 class="page-title">Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li class="active">Dashboard</li>
        </ul>

    </div>
    <div class="main-content">





        <div class="panel panel-default">
            <a href="#page-stats" class="panel-heading" data-toggle="collapse">Latest Stats</a>
            <div id="page-stats" class="panel-collapse panel-body collapse in">

                <div class="row">
<div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;" width="20%">Product Name (CODE)</th>
                                     
                                        <th  style="text-align: center;" width="40%">Description</th>
                                        <th  style="text-align: center;" width="20%">Image</th>
                                        <th  style="text-align: center;" width="10%">Edit</th>
                                        <th  style="text-align: center;" width="10%">Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                
                         
                                    <tr>
           
            
            
            <?php 


$p_id = $_GET['id'];						
include("php/connect.php");
$status = 1;
		
//echo $status;
//echo $p_id;
 
										
 //$sql= "SELECT * FROM products WHERE id='$p_id'";

//$sql2="SELECT * FROM products WHERE main_cat='$p_id'";
								
 $sql2= "SELECT * FROM products WHERE main_cat='$p_id' AND status = '$status'";
								

if($result2 = mysqli_query($conn,$sql2)){		
	
	while ($row2=mysqli_fetch_array($result2)) { 
		
		$product_name = $row2['product_name'];
		
		//$main_category = $row2['main_cat'];

		$description = $row2['description'];
	?>
          
          <td align="center"><?php echo $product_name; ?></td>
           
          
            <td align="center"><?php echo $description;  ?></td>
            
            
 			<td align="center"> <img src="images/products/<?php echo $row2['img_1'] ?>" width="100" class="img-responsive" /></td>
 			
			<td> <a href="product_edit.php?id=<?php echo $row2['id'] ?>"><img src="images/eye.png"></a></td>
			
			<td><a onclick="return confirm('Are you sure you want to delete this item?');" href="product_delete.php?id=<?php echo $row2['id'] ?>"><img src="images/trash.png"></a></td>
			
			
                                        
                                    </tr>
                           <?php
											  }
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

<script>

	$(document).ready( function () {
    $('#myTable').DataTable({
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
		
	}

	);
} );

</script>

<?php include 'footer.php'; ?>